<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Newstore');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title'); ?>
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('cake.generic');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<!-- boostrap code -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Newstore</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#"
                       class="dropdown-toggle active"
                       data-toggle="dropdown"
                       role="button"
                       aria-haspopup="true"
                       aria-expanded="false">Emplacement <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?= $this->Html->link("Emplacements & Etagères", array('controller' => 'Places','action'=> 'index')); ?></li>
                        <li><a href="#">Allées & Colonnes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Quais</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tiers <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><?= $this->Html->link("Societies", array('controller' => 'Societies','action'=> 'index')); ?></li>
                        <li><?= $this->Html->link(" - Suppliers", array('controller' => 'Suppliers','action'=> 'index')); ?></li>
                        <li><?= $this->Html->link(" - Carriers", array('controller' => 'Carriers','action'=> 'index')); ?></li>
                        <li role="separator" class="divider"></li>
                        <li><?= $this->Html->link("Contacts", array('controller' => 'Contacts','action'=> 'index')); ?></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quais <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?= $this->Html->link("Gestion", array('controller' => 'Platforms','action'=> 'index')); ?></li>
                        <li><?= $this->Html->link("Recherche", array('controller' => 'Platforms','action'=> 'search')); ?></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Location <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><?= $this->Html->link("Countries", array('controller' => 'Countries','action'=> 'index')); ?></li>
                        <li><?= $this->Html->link("Cities", array('controller' => 'Cities','action'=> 'index')); ?></li>
                    </ul>
                </li> 
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Utilisateurs <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><?= $this->Html->link("Utilisateurs", array('controller' => 'Users','action'=> 'index')); ?></li>
                        <li><?= $this->Html->link("Services", array('controller' => 'Services','action'=> 'index')); ?></li>
                    </ul>
                </li>
					<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><?= $this->Html->link("Rdvs", array('controller' => 'Rdvs','action'=> 'index')); ?></li>
                        <li><?= $this->Html->link("Fonctionalités", array('controller' => 'Functionnalities','action'=> 'index')); ?></li>
                    </ul>
                </li>
									<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Article <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><?= $this->Html->link("Articles", array('controller' => 'ArticlesUnits','action'=> 'index')); ?></li>
                        <li><?= $this->Html->link("Catalogue", array('controller' => 'CatalogsArticles','action'=> 'index')); ?></li>
                        <li><?= $this->Html->link("Classes", array('controller' => 'ClassesArticles','action'=> 'index')); ?></li>
                        <li><?= $this->Html->link("Réference", array('controller' => 'RefArticles','action'=> 'index')); ?></li>
                       <li><?= $this->Html->link("Conteneur", array('controller' => 'Containers','action'=> 'index')); ?></li>
                    </ul>
                </li>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- cakephp code -->
<!--<h1><?php /*echo $this->Html->link($cakeDescription, 'http://cakephp.org'); */?></h1>-->
<div id="content">

    <?php echo $this->Session->flash(); ?>

    <?php echo $this->fetch('content'); ?>
</div>
<div id="footer">
    <!-- cakephp code -->
    <?php /*echo $this->Html->link(
                $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
                'http://www.cakephp.org/',
                array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
            );
        */?>
    <!-- cakephp code -->
    <!--<p>
            <?php /*echo $cakeVersion; */?>
        </p>-->
</div>
<?= $this->Html->css('bootstrap'); ?>
<?= $this->Html->script('bootstrap'); ?>
<?= $this->Html->css('places'); ?>
<?= $this->Html->script('editable'); ?>
<?= $this->Html->script('multifilter/multifilter'); ?>
<?= $this->Html->script('ddtf/ddtf'); ?>


<!-- cakephp code -->
<?php /*echo $this->element('sql_dump'); */?>
</body>
</html>
