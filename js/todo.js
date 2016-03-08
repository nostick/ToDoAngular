/**
 * Created by csulbaran on 08/03/16.
 */
var app = angular.module('todoApp', []);

    app.controller('todoController', function($scope){
        /*Array de Tareas*/
        $scope.tasks = [];

        /*Funcion para agregar tareas*/
        $scope.add = function() {
            $scope.tasks.push($scope.title);
            $scope.title = '';
        }

        /*Funcion para eliminar*/
        $scope.delete = function() {
            $scope.tasks.splice(this.$index, 1);
            $scope.title = '';
        }

        $scope.done = function(){
            $scope.clicked = true;
        }
    });