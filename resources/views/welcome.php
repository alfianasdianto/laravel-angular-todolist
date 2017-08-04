<!DOCTYPE html>
<html ng-app="todoRecords">
    <head>
        <title>Todo List</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?= url('bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script type="text/javascript">
            var API_URL = '<?= url('api/v1/') ?>'
        </script>
    </head>
    <body>
        <h2>My Task Todo List</h2>
        <div ng-controller="todosController">
            <div class="container-fluid">
                <form name="frmTodo" class="form-horizontal" novalidate="">
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" class="form-control" ng-model="title" ng-required="true" name="title" id="title" placeholder="Title">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" ng-model="todo.duedate" ng-required="true" name="duedate" id="datepicker" placeholder="Due Date">
                        </div>
                        <div class="col-md-2">
                            <button type="button" id="add_todo" class="btn btn-default" ng-click="save()">
                                Add Todo
                            </button>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col-md-10">
                        <ul class="list-group">
                            <li class="list-group-item" ng-repeat="todo in todos">
                                <span><strong>Title : </strong> {{ todo.title }}</span> ||
                                <span> <strong>Due Date : </strong> {{ todo.duedate }}</span>
                                <span ng-click="deleteTodo(todo.id)" class="glyphicon glyphicon-remove"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?= url('angularjs/angular.min.js') ?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="<?= url('bootstrap/js/bootstrap.min.js') ?>"></script>

        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/todo.js') ?>"></script>
    </body>
</html>