<h3><?php echo __("Ingame help"); ?></h3>

<div class="well">
    <p>
        <?php echo __("eBot includes a whole series of commands that can be launched at any time during the match using the chat. These commands allow things such as getting stats, the match score, starting the match, etc ..."); ?>
    </p>
</div>
<hr/>

<h5><?php echo __("Commands usable at any moment"); ?></h5>

<div class="well">
    <ul class="unstyled">
        <li><b>!help</b> : <?php echo __("displays the available commands"); ?></li>
        <li><b>!stats</b> : <?php echo __("send stats of the match (kill, ratio K/D, ratio HS)"); ?></li>
        <li><b>!morestats</b> : <?php echo __("sends the detailed statistics, such as the number of First Kill, 1vX, kill per round, etc ..."); ?></li>
        <li><b>!status</b> : <?php echo __("displays the match status"); ?></li>
        <li><b>!score</b> : <?php echo __("sends the matches scores"); ?></li>
    </ul>
</div>

<h5><?php echo __("Commands usable during warmup"); ?></h5>

<div class="well">
    <ul class="unstyled">
        <li><b>!ready</b> : <?php echo __("telling the bot that the team is ready. When the 2 teams are ready, the match is launched"); ?></li>
        <li><b>!notready</b> : <?php echo __("telling the bot that the team is not ready anymore."); ?></li>
    </ul>
</div>

<h5><?php echo __("Commands usable during knife round"); ?></h5>

<div class="well">
    <ul class="unstyled">
        <li><b>!restart</b> : <?php echo __("tells your team wants the knife round to be restarted. The restart of the knife round is only possible if the other team agrees."); ?></li>
    </ul>
</div>

<h5><?php echo __("Commands usable at the end of the knife round"); ?></h5>

<div class="well">
    <p>
        <?php echo __("At the end of the knife round, the winning team <b>WILL HAVE TO</b> tell the eBot what they decide to do (stay or switch). The eBot will automatically switch the players and reverse the team."); ?>
    </p>
    <ul class="unstyled">
        <li><b>!stay</b> : <?php echo __(" no team switch"); ?></li>
        <li><b>!switch</b> : <?php echo __("switches the teams"); ?></li>
    </ul>
</div>


<h5><?php echo __("Commands usable during the match"); ?></h5>

<div class="well">
    <ul class="unstyled">
        <li><b>!stop</b> : <?php echo __("tells your team wants the match to be stopped. The match stop is only possible if the other team agrees. The team will also have to write stop for the match to be stopped."); ?></li>
        <li><b>!continue</b> : <?php echo __("tells your team is ready to restart the match (in case of a stop)"); ?></li>
        <li><b>!pause</b> : <?php echo __("tells your team wants a pause"); ?></li>
        <li><b>!unpause</b> : <?php echo __("tells your team wants to unpause"); ?></li>
    </ul>
</div>