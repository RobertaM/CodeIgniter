<?php foreach ($postai as $post_item): ?>
	<div class="box1">
	<?php
		$this->load->helper('url');
	?> 	
        <a href="<?php echo base_url('index.php/mainDataController/change/'.$post_item['id'])?>" class="change"> change </a> 
		<a href="<?php echo base_url('index.php/mainDataController/delete/'.$post_item['id'])?>" class="delete"> delete </a> 
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
<div class="ajax-button">
    <input type="button" id="ajax-button" value = "Daugiau žinučių" onclick="aloha()">
</div>