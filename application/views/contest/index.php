<div class="contest_list">
	<table id="contest_table" class="table table-condensed table-bordered table-striped">
		<thead><tr>
			<th><?=lang('contest_id')?></th>
			<th><?=lang('title')?></th>
			<th><?=lang('mode')?></th>
			<th><?=lang('start_time')?></th>
			<th><?=lang('submit_time')?></th>
			<th><?=lang('end_time')?></th>
			<th><?=lang('status')?></th>
			<th><?=lang('register')?></th>
		</tr></thead>
		<tbody><?php
			foreach ($data as $row){
				$cid = $row->cid;
				echo "<tr><td>$cid</td>";
				echo "<td class=\"title\">" . 
					(isset($row->running) ?
						"<a href=\"#contest/problems/$cid\">$row->title</a>" : 
						"<a href=\"#contest/home/$cid\">$row->title</a>") . '</td>';
				echo "<td><span class=\"label label-info\">$row->contestMode</span></td>";
				echo "<td>$row->startTime</td>";
				echo "<td>$row->submitTime</td>";
				echo "<td>$row->endTime</td>";
				echo "<td>$row->status</td>";
				echo "<td>";
				if ($row->private)
					echo anchor("#contest/register/$cid", "<span class=\"btn btn-success btn-mini\" style=\"font-weight:bold\">" . 
													lang('register') . "</span><span class=\"badge badge-info\">x$row->count</span>");
				echo '</td></tr>';
			}
		?></tbody>
	</table>
	<?=$this->pagination->create_links()?>
</div>

	
<!-- End of file index.php  -->
