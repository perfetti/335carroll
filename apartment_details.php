<?php $include_sidebar = true ?>
<?php include 'header.php' ?>

<nav id="sidebar">

</nav>

<section id="apartment_details">
	<ul class="cf">
		<li data-detail-select="overview" class="active"></li>
		<li data-detail-select="amenities" >Amenities</li>
		<li data-detail-select="neighborhood" >Neighborhood</li>
	</ul>
	
	<!-- related details -->
	<article id="overview" class="details active">
		details
	</article>
	<article id="amenities" class="details">
		amen
	</article>
	<article id="neighborhood" class="details">
		neighbor
	</article>


</section>
<script>
 	window.myspace.enableDetailsSwapEffect();
 	window.myspace.enableSidebarEffect();
</script>

<section id="apartment_photos">
	<!-- FIXME 
		PUT A BUNCH OF PICTURES IN HERE it'll scroll -->
</section>

<?php include 'footer.php' ?>