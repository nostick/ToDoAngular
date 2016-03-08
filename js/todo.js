/**
 * Created by csulbaran on 08/03/16.
 */
var app = angular.module('todoApp', []);

    app.controller('todoController', function($scope){
        /*Array de Tareas*/
        $scope.tasks = [];
        $scope.isDone = 'Done?';

        /*Funcion para agregar tareas*/
        $scope.add = function() {
            var newTodo = {
                title: $scope.title,
                completed: false
            };
            $scope.tasks.push(newTodo);
            $scope.title = '';
        };

        /*Funcion para eliminar*/
        $scope.delete = function() {
            $scope.tasks.splice(this.$index, 1);
            $scope.title = '';
        };

        $scope.done = function(){
            if ($scope.tasks[this.$index].completed == false ){
                $scope.tasks[this.$index].completed = true;
                $scope.isDone = 'unDone?';
            }else{
                if($scope.tasks[this.$index].completed == true){
                    $scope.tasks[this.$index].completed = false;
                    $scope.isDone = 'Done?';
                }
            }
        }
    });