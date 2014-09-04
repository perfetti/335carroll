<?php $include_sidebar = true ?>
<?php include 'header.php' ?>

<section id="apartment_details">
	<img src="img/details_header.jpg" class="details_header" alt="details header" />

	<ul class="cf">
		<li data-detail-select="overview" class="active">Overview</li>
		<li data-detail-select="amenities" >Amenities</li>
		<li data-detail-select="neighborhood" >Neighborhood</li>
	</ul>
	
	<!-- related details -->
	<article id="overview" class="details active">
		<h4>Old World Charm Meets Modern Luxury</h4>
		<br>
		<p>	
			This five-story, 30-unit luxury building located on treelined streets flanked by Brooklyn brownstone and townhouses in the heart of historic Carroll Gardens is where old world charm meets modern convenience. 
		</p>
		<br />
		<p>
			Originally built in 1931, no expense was spared in the full-gut rehab to offer premium finishes and state-of-the-art amenities for true comfort you can call home immediately upon move in. Pet friendly. Guarantors accepted.<br />
		</p>
		<br>
		<span>Call or email for a viewing today.</span>
		<br>
		<br>

	</article>
	<article id="amenities" class="details">
		<h4>Custom Comforts and Fixtures</h4>
		<br>

		This elevator building features balconied units - some with spectacular downtown Manhattan views -  with ensuite laundry, parking garage, bike room, state-of-the-art lounge, and fitness center. Each apartment is fitted with premium Bosch and GE stainless steel appliances.
		<br>
		<br>

		<ul>
			<li>Nestled in the heart of Brooklyn, at the intersection of tony Carroll Gardens between Hoyt and Bond, bordering edgy Gowanus, flanked by Cobble Hill, Red Hook, and Park Slope 	</li>
			<li>1.5 blocks from F and G lines on Carroll Street, the only station with a built-in branch outlet of the famed Momofuku Milk Bar </li>
			<li>2 blocks from the Union Street R Train stop </li>
			<li>5-10 minutes from the new Whole Foods on 3rd St and 3rd Av in Gowanus</li>
			<li>2 blocks from the 5,000- square foot Royal Palms shuffleboard Club, an entertainment and dining, Lavender Lake and Dinosaur BBQ.</li>
			<li>Walk up and down Smith and Court and find everything you need from laundry and dry cleaners</li>	
			<li>Two movies theaters</li>
			<li>1.5 blocks from Carrol Gardens public park</li>
		</ul>	
		<br>

	</article>
	<article id="neighborhood" class="details">
		<h4>In the Heart Of Brooklyn</h4>
		<br>

		Prized for its quick commute to downtown Manhattan and Park Slope, Carroll Gardens is a destination neighborhood boasting of every essential services, Smith Street's restaurant row and Court Street's myriad boutiques as well as Brooklyn’s first Whole Foods located minutes away in Gowanus and Trader Joe's at Court St and Atlantic Av. 

		<br>
		<br>
		<img src="img/location_map.png" id="location_map"/>
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3025.756402321206!2d-73.991505!3d40.679336000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a5653efd80b%3A0x37d46487b1f4df28!2s335+Carroll+St%2C+Brooklyn%2C+NY+11231!5e0!3m2!1sen!2sus!4v1409328578031" width="600" height="450" frameborder="0" style="border:0"></iframe> -->

	</article>

	<article id="floorPlans" class="details">
		<h4>Studio</h4>
		<img src="img/floor_plans/1A.png">
		<br>
		<h4>1 Bedroom + Den</h4>
		<img src="img/floor_plans/2B.png">
		<br>
		<h4>1 Bedroom</h4>
		<img src="img/floor_plans/2C.png">
		<br>
		<h4>2 Bedroom + 2 Bathroom</h4>
		<img src="img/floor_plans/2D.png">
		<br>
		<h4>3 Bedroom</h4>
		<img src="img/floor_plans/3D.png">
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3025.756402321206!2d-73.991505!3d40.679336000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a5653efd80b%3A0x37d46487b1f4df28!2s335+Carroll+St%2C+Brooklyn%2C+NY+11231!5e0!3m2!1sen!2sus!4v1409328578031" width="600" height="450" frameborder="0" style="border:0"></iframe> -->

	</article>
	
	<a class="button orange" href="#" data-href="http://myspacenyc.com/agents" class="contact_agent"> Contact an Agent</a>
	<a class="button orange" data-src="open-houses-button.png" href="#" class="open_house">Open Houses</a>
	
	<small class="warning">*images may not represent actual unit.</small>

</section>
<script>
 	window.myspace.enableDetailsSwapEffect();
</script>

<section id="apartment_photos">
<!-- FIXME 
		PUT A BUNCH OF PICTURES IN HERE it'll scroll -->
		  <img src="img/apartment_photos/335-Carroll_Alt_Layouts_03.jpg" alt="some_text">
		  <img src="img/apartment_photos/335-Carroll_Alt_Layouts_15.jpg" alt="some_text">
		   <img src="img/apartment_photos/335-Carroll_Alt_Layouts_20.jpg" alt="some_text">
		    <img src="img/apartment_photos/335-Carroll_Model_08.jpg" alt="some_text">
		     <img src="img/apartment_photos/335-Carroll_Model_17.jpg" alt="some_text">
		        <img src="img/apartment_photos/335-Carroll_Alt_Layouts_19.jpg" alt="some_text">
		<?php switch($_GET["bd"]) {
			case 0: 
		?>
		<img src="img/floor_plans/1A.png">
		<?php 
			break;
			case 1:
		?>

		<img src="img/floor_plans/2C.png">
		<?php 
			break;
			case 2:
		?>

		<img src="img/floor_plans/2D.png">
		<?php 
			break;
			case 3:
		?>

		<img src="img/floor_plans/3D.png">
		<?php 
			break;
		}
		?>
</section>
<?php include 'footer.php' ?>
