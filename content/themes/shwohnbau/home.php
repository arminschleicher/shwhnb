<?php
/*
Template Name: Home
*/
get_header(); ?>
	
	<div id="about" class="small-12 relative preload-img columns" data-background-src="<?php img_uri('home/drawing.jpg')?>" role="main">
		<section class="sticky-mate small-12">
		    <!--
			<div id="sticky-nav" class="small-2">
				<div class="sticky-nav-content left hide-for-small-only">
					<ul class="clean-list">
						<li>
							<h5 class="cursor-hand scroll highlight" data-scroll="kontakt-section-1">Anschrift</h5>
						</li>
						<li>
							<h5 class="cursor-hand scroll" data-scroll="kontakt-section-2">Formular</h5>
						</li>
					</ul>
					<div class="top-button top-button-sticky-nav top-button-kontakt preload-img" data-background-src="<?php img_uri('icons/arrow-top.png')?>">
					</div>
				</div>
			</div>
			-->
			<div class="small-12 small-centered medium-10 medium-offset-2 columns section-content-light">
				<div class="content-title small-12 medium-4 left">
					<header>
						<h2 class="uppercase highlight"><?php the_field('ueber-titel');?></h2>
					</header>
					<hr class="small-6 close padding-bottom32 highlight">
				</div>
				
				<div class="small-12 medium-8 left columns">
				    <div id="aboutcontent">
				        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				    </div>
				</div>
				
			</div>
		</section>
	</div>
    <div id="contact" class="left small-12">
    		<div class="small-12">
    			<section id="kontakt-section-2" class="small-12">
    				<div id="kontaktformular-wrapper" class="small-12 small-centered medium-10 medium-offset-2 padding-top16 columns">
    					<div id="kontaktformular-default">
    						<div class="content-title columns">
    						    <div class="small-12 medium-4 left">
        							<header>
        								<h2 class="light uppercase"><?php the_field('kontakt-titel');?></h2>
        							</header>
        							<hr class="small-1 light close padding-bottom32">
        						</div>
        						<div class="small-12 medium-8 left">
        						    <div class="content-text body-text light columns">
            							Fühlen Sie sich frei uns eine Nachricht über das Kontaktformular zu 
            							schreiben.<br/>Wir freuen uns auf Ihre Anfrage.
        						    </div>
        						</div>
    						</div>
    						
    						
    						<div class="small-12 medium-4 content-text sans columns light left">
            					<p>
            					    <?php the_field("unternehmen-name");?><br>
            						<?php the_field("anschrift");?><br>
            						<?php the_field("plz");?> <?php the_field("ort");?><br>
            						
            					<p/>
            					<p>
            						T <?php the_field("telefon");?><br/>
            						M <a class="light" href="mailto:<?php the_field("email");?>"><?php the_field("email");?></a><br/>
            						W <a class="light" href="mailto:<?php the_field("web");?>" target="_blank"><?php the_field("web");?></a>
            					</p>
            				</div>
            				<div class="small-12 medium-8 left">
        						<div>
        							<form id="contact-form" autocomplete="off" action=""> 
        								<div class="small-12">
        									<div class="row">
        										<div class="small-12 medium-6 left columns">
        										    <label for="firma">Firma</label>
        											<div class="status"></div>
        											<input id="firma" name="firma" type="text" placeholder=""/>
        										</div>
        										<div class="small-12 medium-6 left columns">
        										    <label for="name">Name *</label>
        											<div class="status"></div>
        											<input id="name" name="name" type="text" placeholder="" />
        										</div>
        										<div class="small-12 medium-6 left columns">
        										    <label for="name">E-Mail *</label>
        											<div class="status"></div>
        											<input id="from"  name="from" type="text" placeholder=""/>
        											<input id="to"  name="to" type="hidden" value="<?php the_field("kontaktformular_empfanger");?>"/>
        										</div>
        										<div class="small-12 medium-6 left columns">
        										    <label for="telefon">Telefon</label>
        											<div class="status"></div>
        											<input id="telefon" name="telefon" type="text" placeholder=""/>
        										</div>
        									</div>
        								</div>
        								<div class="small-12 columns">
        									<div class="row">
        										<div class="small-12">
        											<input id="subject"  name="subject" type="hidden" value="<?php the_field("kontaktformular_betreff");?>"/>
        											<label for="nachricht">Nachricht *</label>
        											<textarea id="message" name="message" placeholder=""></textarea>
        											<div class="status"></div>
        										</div>
        										<div class="small-12">
        											<label class="light body-text-small">* Felder mit Stern sind Pflichfelder</label>
        										</div>
        									</div>
        									
        									<button id="send" type="submit" class="small-12 medium-3 medium-offset-9 light">Senden</button>
        								
        								</div>
        							</form>
        						</div>
        					</div>
        					<div id="kontaktformular-status" class="margin-top70 small-12">
        						<h2 id="status" class="light">
        						</h2>
        					</div>
        				</div>
    				</div>
    			</section>
    		</div>
    	</div>
</section>
	
		
<?php get_footer(); ?>