

 
 <div id="rev_slider_12_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="construction-slider8" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
	<!-- START REVOLUTION SLIDER 5.3.0.2.1 fullwidth mode -->
	<div id="rev_slider_12_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2.1">
	<ul>	
		@foreach($sliders as $key=>$slider)
			<!-- SLIDE  -->
			<li data-index="rs-{{37+$key}}" data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"  data-thumb="revolution/assets/slide5/100x50_3a82d-slide7-1.jpg"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="{{asset('img/sliders/'.$slider->image)}}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Power0.easeIn" data-scalestart="100" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->

				<!-- LAYER NR. 1 -->
				<div class="tp-caption   tp-resizeme"
					id="slide-37-layer-1"
					data-x="375"
					data-y="center" data-voffset="-100"
								data-width="['auto']"
					data-height="['auto']"

					data-type="text"
					data-responsive_offset="on"

					data-frames='[{"delay":1220,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power1.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 5; white-space: nowrap; font-size: 73px; line-height: 73px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Roboto;border-color:rgba(255, 210, 0, 1.00);">
					<span class="text-yellow" style="font-size:73px;color:#fff;background-color:#078a36">{{$slider->titre}}</span></div>
				

			</li>
		@endforeach
	</ul>
		<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	\
	</div>
</div>

<!--=================================
 banner -->
