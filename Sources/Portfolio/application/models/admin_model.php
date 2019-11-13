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

    public function get_user() {
        return $this->getRecord("SELECT * FROM `user` WHERE `id` =".$_SESSION['user_id']);
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
            WHERE `id` =".$_POST['id']);

        $_SESSION['message'] = empty($query) ? 'Successful saving!' : $query;
    }

    public function save_category() {

        for ($i=0; $i < count($_POST['name']); $i++) {

            if (isset($_POST['id'][$i]))
                $query = $this->executeDML("UPDATE `category` SET `name`='".$_POST['name'][$i]."'
                    WHERE `id`=".$_POST['id'][$i]);
            
            else if (!empty($_POST['name'][$i]))
                $query = $this->executeDML("INSERT INTO `category` (`user_id`, `name`) VALUES
                    (".$_SESSION['user_id'].", '".$_POST['name'][$i]."')");
        }
        $_SESSION['message'] = empty($query) ? 'Successful saving!' : $query;
    }

    public function update_img() {

    }

    public function delete($table, $id) {

        if ($table == 'category')
            $this->executeDML("UPDATE `images` SET `category_id`=NULL WHERE `category_id`=".$id);

        $query = $this->executeDML("DELETE FROM `".$table."` WHERE `id`=".$id);
        
        $_SESSION['message'] = empty($query) ? 'Successful removed!' : $query;
    }
}