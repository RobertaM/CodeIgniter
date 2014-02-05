<?php foreach ($postai as $post_item): ?>
	<div class="box1">
	<?php
		$this->load->helper('url');

    ?> 	

        <a href="<?php echo base_url('index.php/mainDataController/deleteContact/'.$post_item['id'])?>" class="delete"> delete </a> 

        <h2 class="title">
    		<?php echo $post_item['Pavadinimas'] ?> 
    	</h2>

    <div class="pos">
    	<p>
	        <?php echo $post_item['Problema'] ?>
    	</p>
    </div>	
    <div class="end"> </div>
	</div>
<?php endforeach ?>
