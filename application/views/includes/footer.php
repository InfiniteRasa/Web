<div id="main_2">
			<div id="serverlist_right">
				<ul id="serverlist">
					
					<?php foreach($query->result() as $row): ?>
						<?php $server_id = $row->server_id; ?>
						<?php echo ($row->status == true) ? ('<li><a href="#">Server '.$server_id.' : <h2 class="online">Online</h2></a></li>') : ('<li><a href="#">Server '.$server_id.' : <h2 class="offline">Offline</h2></a></li>'); ?>	
					<?php endforeach; ?>
					
				</ul>
			</div>
		</div>
		
		<div id="main_bottom">
		</div>
		
		<div id="footer">
			Whatever is written here is the footer.
		</div>
	</div>
</body>
</html>