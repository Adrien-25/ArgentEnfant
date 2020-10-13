<?php
    /**
     * Template Name: Player_MRL 
     *
     * @package Argent Enfant
     */
    ?>
<?php wp_head(); ?>
  
<?php wp_footer(); ?>
<?php $choix = get_option('player_mrl_choix');?>
<!-- modèle -->
<div class="block_player">
    <section class="block_player-head" id="container">
        <h2 class="titre_pointu">MAURICE RADIO LIBRE</h2>
        <p class="text_player"><?= get_option('player_mrl_p')[$choix];?></p>
    </section>

    <section class="player" id="container2"><?= wp_get_attachment_image(get_option('player_mrl_img')[$choix], 'medium', false, [ 'id' => get_option('player_mrl_img')[$choix] ])?>


    <?php echo do_shortcode("[lunaradio width='100%' height='304px' radiustopleft='0px' radiustopright='0px' radiusbottomleft='0px' radiusbottomright='0px'  borderposition='none' bordercolor='rgba(255,255,255,1)' bordersize='0px' token='X1NnZFtVV2RTVlthXltUZFcgVWFf' userinterface='big' backgroundcolor='rgba(14,16,21,1)' fontcolor='#ffffff' hightlightcolor='#D30916' fontname='' googlefont='' fontratio='0.4' radioname='Maurice Radio Libre' scroll='true' coverimage='' onlycoverimage='false' coverstyle='false' usevisualizer='real' visualizertype='4' multicolorvisualizer='true' color1='rgb(211, 9, 22)' color2='rgb(211, 9, 22)' color3='rgb(211, 9, 22)' color4='rgb(211, 9, 22)' itunestoken='1000lIPN' metadatatechnic='fallback' ownmetadataurl='' corsproxy='' usestreamcorsproxy='false' streamurl='https://radio4.pro-fhi.net/live/MauriceRadioLibre' streamtype='icecast2' icecastmountpoint='' radionomyid='' radionomyapikey='' radiojarid='' radiocoid='sdef46f462' shoutcastpath='/live' shoutcastid='1' streamsuffix='' metadatainterval='20000' volume='90' displayliveicon='false' debug='false' ]");?>
    </section>    
	<section class="liens">
	<h1 class="title2_player2">EN DIRECT</h1>
	
<a href="https://apps.apple.com/us/app/maurice-radio-libre/id1209479288?l=fr&ls=1" target="_blank"><img class="logo" src="http://dev2.mauriceradiolibre.com/wp-content/uploads/2020/08/mini_logo_apple.png" alt="" width="41" height="50" /> </a>
<a href="https://play.google.com/store/apps/details?id=com.app10277" target="_blank"> <img class="logo alignnone" src="http://dev2.mauriceradiolibre.com/wp-content/uploads/2020/08/mini_icone_android.png" alt="" width="50" height="50" /> </a> 
<a href="podcasts" target="_blank"> <img class="logo alignnone size-full wp-image-447" src="http://dev2.mauriceradiolibre.com/wp-content/uploads/2020/08/logo_podcast.png" alt="" width="55" height="50" /> </a>
    </section>
</div>
<script>
	jQuery(document).ready(function(){
		
		var id = jQuery(".wp-lunaradio")[0].id; 
	console.log(id);
	jQuery("#"+id+"backgroundimage").remove();
	 jQuery("#"+id+"coverwrapper").remove();
		
	});
	
</script>