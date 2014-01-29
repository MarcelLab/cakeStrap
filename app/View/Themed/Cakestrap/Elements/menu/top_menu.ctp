<nav class="navbar navbar-default" role="navigation">
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><?php echo $this->Html->link(__(ucfirst('Dashboard')), array('controller' => 'dashboard', 'action' => 'index', 'prefix' => 'admin', 'admin' => true)); ?></li>
      <?php $controllersList = Configure::read('Menu.controllers'); ?>
      <?php if($controllersList) : ?>
      <?php foreach($controllersList as $controllerName => $actionsList) : ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?PHP echo __(ucfirst($controllerName));?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <?php foreach($actionsList as $actionName => $actionLabel) : ?>
            <li><?php echo $this->Html->link(__(ucfirst($actionLabel)), array('controller' => $controllerName, 'action' => $actionName, 'full_base' => true)); ?></li>
          <?php endforeach; ?>
        </ul>
      </li>
      <?php endforeach; ?>
      <?php endif; ?>
      <li><?php echo $this->Html->link(__(ucfirst('Moderate')), array('controller' => 'moderate', 'action' => 'index', 'prefix' => 'admin', 'admin' => true)); ?></li>
    </ul><!-- /.nav navbar-nav -->
  </div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->
