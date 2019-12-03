<div class="container">
    <div class="bg1 mar_t_3">
        <div class="row">
            <div class="span10 offset1 mar_t_5 pad_b_6 pad_l_3">
                <h2>Contact Information</h2>
                    <div class="extra-wrap">  
                        <div class="imgIndent3">
                            <figure class="g_map"><iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe></figure>
                        </div>
                        <div class="pull-left address">
                            <p class="p2">8901 Marmora Road, Glasgow, D04 89GR.</p>
                            <p class="mar_null">
                            <?php if (!empty($data['user']['phone'])): ?>  
                                <span class="width1">Telephone:</span>
                                <span><?=$data['user']['phone']?></span>
                            <?php endif; ?>
                            <?php if (!empty($data['user']['email'])): ?>  
                                <span class="width1">Email:</span>
                                <span><?=$data['user']['email']?></span>
                            <?php endif; ?>
                            <?php if (!empty($data['user']['facebook'])): ?>  
                                <span class="width1">facebook:</span>
                                <span><?=$data['user']['facebook']?></span>
                            <?php endif; ?>
                            <?php if (!empty($data['user']['instagram'])): ?>  
                                <span class="width1">instagram:</span>
                                <span><?=$data['user']['instagram']?></span>
                            <?php endif; ?>
                            </p>
                        </div>
                    </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>