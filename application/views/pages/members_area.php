<?php foreach ($postai as $post_item): ?>
	<div class="box1">
	<?php
		$this->load->helper('url');
	?> 	
    	<h2 class="title">
    		<?php echo $post_item['pavadinimas'] ?> 
    	</h2>

    <div class="pos">
    	<p>
	        <?php echo $post_item['Postas'] ?>
    	</p>

    	<div class="autorius"><?php echo $post_item['Autorius'] ?> </div>
    </div>	
    <div class="end"> </div>
	</div>
<?php endforeach ?>
<div id="ajax-button">
    <input type="button" id="ajax-button" value = "Daugiau žinučių" onclick="aloha(<?php echo $postai[0]['offset'] ?>)">
</div>