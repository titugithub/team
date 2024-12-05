









<div class="our-team">
    <?php if ($team_image['url']) : ?>
        <img class="ft-image" src="<?php echo $team_image['url']; ?>" alt="<?php echo $team_name; ?>">
    <?php endif; ?>
    <div class="team-content ft-content">
        <?php if ($team_name) : ?>
            <h3 class="title ft-name"><?php echo $team_name; ?></h3>
        <?php endif; ?>
        <?php if ($team_designation) : ?>
            <span class="post ft-designation"><?php echo $team_designation; ?></span>
        <?php endif; ?>
        <ul class="social-linkss ft-social">
            <?php
            foreach ($team_socials as $social) {
                ?>
                <li><a href="<?php echo $social['team_social_link']['url']; ?>"><i class="<?php echo $social['team_social_icon']['value']; ?>"></i> </a></li>
            <?php
            }
            ?>

        </ul>
    </div>
</div>