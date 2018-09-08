
<html>
<body>

    <ul>
         <?php foreach($todo->getTasks() as $index => $task): ?>
            
                <li class="<?php echo $task->isFinished() ? 'finished':'' ?>">
                    <?php echo $task->getText() ?>
                </li>
            
          <?php endforeach; ?>
        
    </ul>

</body>

</html>

