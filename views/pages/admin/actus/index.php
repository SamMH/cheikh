<a href="<?= WEBROOT ?>admin/actus/add"  class="btn btn-sm btn-primary">Ajouter</a>
<br/>
<br/>
<table class="table table-bordered table-condensed table-striped table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Titre</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($actus as $k=>$c): ?>
		<tr>
			<td><?= $k+1; ?></td>
			<td><?= $c['titre']; ?></td>
			<td >
				<div class="btn-group">	
					<a href="<?= WEBROOT ?>admin/actus/edit/<?= $c['id']; ?>" class="btn btn-xs btn-info"> Edit </a>
					<a href="<?= WEBROOT ?>admin/actus/del/<?= $c['id']; ?>" class="btn btn-xs btn-danger" onclick="return confirm('Sur de sur !');"> Del </a>
				</div>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>