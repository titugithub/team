
<div class="our-team2">
    <div class="team_img">
        <img src="<?php echo $team_image['url']; ?>">
        <ul class="social ft-social">
            <?php
            foreach ($team_socials as $social) {
                ?>
                <li>
                    <a href="<?php echo $social['team_social_link']['url']; ?>">
                        <i class="<?php echo $social['team_social_icon']['value']; ?>"></i>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div class="team-content ft-content">
        <h3 class="title ft-name"><?php echo $team_name; ?></h3>
        <span class="post ft-designation"><?php echo $team_designation; ?></span>
    </div>
</div>
