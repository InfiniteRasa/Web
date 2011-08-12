</div>
<div id="main_2">
			<div id="serverlist_right">
				<ul id="serverlist">
					
					<?php foreach($query->result() as $row): ?>
						<?php $server_id = $row->name; ?>
						<?php echo ($row->status == true) ? ('<li><a href="#">'.$server_id.' : <h2 class="online">Online</h2></a></li>') : ('<li><a href="#">'.$server_id.' : <h2 class="offline">Offline</h2></a></li>'); ?>	
					<?php endforeach; ?>
					
				</ul>
			</div>
		</div>
		
		<div id="main_bottom">
		</div>
		
		<div id="footer">
			&copy; 2011 InfiniteRasa.com
		</div>
	</div>
</body>
</html>