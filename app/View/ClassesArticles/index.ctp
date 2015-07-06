
<div class="panel panel-default">
    <div class="panel-body">
        <div class="container">
            <h1>Les classes</h1>
			<h5><?php echo $this->Html->link('Ajouter une classe', array('action' => 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?></h5>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
						<th>Id</th>
						<th>Libellé</th>
						<th>Parent</th>	
						<th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($classesarticles as $class): ?>
						<tr>
						   <td><?php echo $class['ClassesArticle']['id']; ?></td>
							<td>
								<?php echo $this->Html->link($class['ClassesArticle']['label'],
								array('controller' => 'classesarticles', 'action' => 'view', $class['ClassesArticle']['id'])); ?>
							</td>
							<td>
								<?php 
									echo $class['ClassesArticle']['classe_id']; 
									echo ' - ';
									echo $class['Supervisor']['label'];
								?>
							</td>
                            <td>

                                <?php
                                $btn_edit = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
                                                <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                                            </button>";

                                $btn_delete = "<button type='button' class='btn btn-default btn-xs' aria-label='Left Align'>
                                                <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                                            </button>";
                                ?>

                                <?= $this->Html->link(
                                    $btn_delete,
                                    array('controller' => 'ClassesArticles','action'=> 'delete', $class['ClassesArticle']['id']),
                                    array('escape' => false, 'style' => "margin-left:10px"),
                                    "Are you sure you wish to delete the Class : ".$class['ClassesArticle']['label']
                                );
                                ?>

                                <?= $this->Html->link(
                                    $btn_edit,
                                    array('controller' => 'ClassesArticles','action'=> 'edit', $class['ClassesArticle']['id']),
                                    array('escape' => false, 'style' => "float:left;margin-left:10px"));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

