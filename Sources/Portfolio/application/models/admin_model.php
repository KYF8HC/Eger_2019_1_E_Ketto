<?php

class admin_model extends Model {

    public function verify_user() {
        $query = $this->getRecord("SELECT * FROM `user`
            WHERE (`name`='".$_POST['email']."' OR `email` ='".$_POST['email']."')");
        
        if (password_verify($_POST['password'], $query['password'])) {
            $_SESSION['user_id'] = $query['id'];
            $_SESSION['message'] = 'Successful login!';
            return true;
            
        } else {
            $_SESSION['message'] = 'Incorrect data!';
            return false;
        }
    }

    public function update_text() {

        for ($i=0; $i < count($_POST['id']); $i++) {
            $query = $this->executeDML("UPDATE `text` SET `title`='".$_POST['title'][$i]."', `paragraf`='".$_POST['paragraf'][$i]."'
                WHERE `id`=".$_POST['id'][$i]);
        }
        $_SESSION['message'] = empty($query) ? 'Successful saving!' : $query;
    }

    public function update_user() {
        $query = $this->executeDML("UPDATE `user` SET
            `email` = '".$_POST['email']."',
            `phone` = '".$_POST['phone']."',
            `city` = '".$_POST['city']."',
            `address` = '".$_POST['address']."',
            `facebook` = '".$_POST['facebook']."',
            `instagram` = '".$_POST['instagram']."',
            `twitter` = '".$_POST['twitter']."',
            `youtube` = '".$_POST['youtube']."',
            `pinterest` = '".$_POST['pinterest']."',
            `tumblr` = '".$_POST['tumblr']."',
            `behance` = '".$_POST['behance']."',
            `github` = '".$_POST['github']."',
            `linkedin` = '".$_POST['linkedin']."'
            WHERE `id` = ".$_POST['id']);

        $_SESSION['message'] = empty($query) ? 'Successful saving!' : $query;
    }

    public function save_category() {

        for ($i=0; $i < count($_POST['name']); $i++) {

            if (isset($_POST['id'][$i]))
                $query = $this->executeDML("UPDATE `category` SET
                    `name` = '".$_POST['name'][$i]."'
                    WHERE `id` = ".$_POST['id'][$i]);
            
            else if (!empty($_POST['name'][$i]))
                $query = $this->executeDML("INSERT INTO `category` (`user_id`, `name`) VALUES
                    (".$_SESSION['user_id'].", '".$_POST['name'][$i]."')");
        }
        $_SESSION['message'] = empty($query) ? 'Successful saving!' : $query;
    }

    public function save_image() {
        $j = 0;

        for ($i=0; $i < count($_POST['name']); $i++) {

            if (isset($_POST['id'][$i]))
                $query = $this->executeDML("UPDATE `images` SET
                    `category_id` = '".$_POST['category_id'][$i]."',
                    `name` = '".$_POST['name'][$i]."',
                    `description` = '".$_POST['description'][$i]."'
                    WHERE `id` = ".$_POST['id'][$i]);
            
            else {
                $target_file = 'assets/img/gallery/'.basename($_FILES["location"]["name"][$j]);
                $file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                if (file_exists($target_file)) {
                    $_SESSION['message'] = 'This image already exists.';
                    return false;

                } elseif ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif") {
                    $_SESSION['message'] = 'Only JPG, JPEG, PNG & GIF files are allowed.';
                    return false;

                } else {
                    $query = $this->executeDML("INSERT INTO `images` (`user_id`, `category_id`, `name`, `location`, `updated_at`, `description`) VALUES
                        (".$_SESSION['user_id'].", '".$_POST['category_id'][$i]."', '".$_POST['name'][$i]."', '".$_FILES['location']['name'][$j]."', '".date("Y-m-d")."', '".$_POST['description'][$i]."' )");
                    
                    move_uploaded_file($_FILES["location"]["tmp_name"][$j], $target_file);
                }
                $j++;
            }
        }
        $_SESSION['message'] = empty($query) ? 'Successful saving!' : $query;
    }

    public function delete($table, $id) {

        switch ($table) {
            case 'category':
                $this->executeDML("UPDATE `images` SET `category_id`=NULL WHERE `category_id`=".$id);
                break;

            case 'images':
                $location = $this->getField("SELECT `location` FROM `images` WHERE `id`=".$id);
                unlink('assets/img/gallery/'.$location);
                break;
        }
        $query = $this->executeDML("DELETE FROM `".$table."` WHERE `id`=".$id);
        
        $_SESSION['message'] = empty($query) ? 'Successful removed!' : $query;
    }
}