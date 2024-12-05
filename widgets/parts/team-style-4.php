<div class="single-team-member-04">                     
   <div class="thumb">
      <img class="ft-image" src="<?php echo $team_image['url'];?>" alt="<?php echo $team_name;?>">
      <div class="border"></div>
   </div>

<div class="content">
   <div class="top-content">
      <h4 class="title ft-name"><?php echo $team_name;?></h4>
      <span class="post ft-designation"><?php echo $team_designation;?></span>
   </div>
   <div class="bottom-content">
      <ul class="social-icon ft-social">
         <?php
                foreach($team_socials as $social) {
            ?>
                <li><a href="<?php echo $social['team_social_link']['url'];?>"><i class="<?php echo $social['team_social_icon']['value'];?>"></i></a></li>
            <?php
                }
            ?>
      </ul>
   </div>
</div>
</div>