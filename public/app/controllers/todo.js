app.controller('todosController', function($scope, $http, API_URL) {
    $http.get(API_URL + "/todos/list").then(loadTodos);

    function loadTodos(res) {
        $scope.todos = res.data;
    }

    $scope.selectTodos = function() {
        $http.get(API_URL + "/todos/list").then(loadTodos);
    }

    $scope.save = function() {
        var url = API_URL + '/todos/save';

        $http({
            url: url,
            method: "POST",
            data: { 
                'title' : $scope.title,
                'duedate' : $scope.duedate 
            }
        })
        .then($scope.selectTodos())
    }

    //delete record
    $scope.deleteTodo = function(id) {
        var url = API_URL + '/todos/' + id + '/delete';

        $http.get(url).then($scope.selectTodos());
    }

    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });

    $("#datepicker").on("change", function() {
        $scope.duedate = $("#datepicker").val();
    });
});