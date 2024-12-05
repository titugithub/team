<div class="our-team3">
    <img class="team-image" src="<?php echo $team_image['url']; ?>" alt="<?php echo $team_name; ?>">
    <div class="over-layer">
        <div class="team-content ft-content">
            <h3 class="title ft-name"><?php echo $team_name; ?></h3>
            <span class="post ft-designation"><?php echo $team_designation; ?></span>
            <p class="description ft-description"><?php echo $team_description; ?></p>
        </div>
    </div>
    <ul class="social-links3 ft-social">
        <?php
        foreach ($team_socials as $social) {
            ?>
            <li><a href="<?php echo $social['team_social_link']['url']; ?>"><i class="<?php echo $social['team_social_icon']['value']; ?>"></i></a></li>
        <?php
        }
        ?>
    </ul>
</div>