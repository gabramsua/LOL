<?php

/* @intranet/Default/tasks.html.twig */
class __TwigTemplate_73f90e4dea7df56ecef142b81f463fbf44e0240a574e3f7f7290dc69a66348eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/tasks.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbc61f6a6977f12c5558000f2caafc33dad7003257b4e5657f2db89db1305073 = $this->env->getExtension("native_profiler");
        $__internal_bbc61f6a6977f12c5558000f2caafc33dad7003257b4e5657f2db89db1305073->enter($__internal_bbc61f6a6977f12c5558000f2caafc33dad7003257b4e5657f2db89db1305073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/tasks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbc61f6a6977f12c5558000f2caafc33dad7003257b4e5657f2db89db1305073->leave($__internal_bbc61f6a6977f12c5558000f2caafc33dad7003257b4e5657f2db89db1305073_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_11c26d69a8d5fd38e7e601b553dd216fc2b05212680cfe8eb3a61ce8e98e68b1 = $this->env->getExtension("native_profiler");
        $__internal_11c26d69a8d5fd38e7e601b553dd216fc2b05212680cfe8eb3a61ce8e98e68b1->enter($__internal_11c26d69a8d5fd38e7e601b553dd216fc2b05212680cfe8eb3a61ce8e98e68b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css\">
        <link rel=\"stylesheet\" href=\"taskStyles.css\">
        <script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false\"></script>
        <script src=\"moment.min.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js\"></script>
        <script src=\"http:////ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js\"></script>
        <script src=\"http://ngmaterial.assets.s3.amazonaws.com/svg-assets-cache.js\"></script>
        <script src=\"https://code.jquery.com/jquery-1.12.3.min.js\"   integrity=\"sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=\"   crossorigin=\"anonymous\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/angular-material-icons/0.7.0/angular-material-icons.min.js\"></script> 
        <script>
            var app = angular.module('MyApp',['ngRoute', 'ngMaterial', 'ngMessages', 'material.svgAssetsCache', 'ngMdIcons']);
            app.config(function(\$interpolateProvider){
                \$interpolateProvider.startSymbol('{[{').endSymbol('}]}');});
            app.controller('tasksController', tasksController);
            app.controller('updateTaskDialogController', updateTaskDialogController);
            app.controller('createTaskDialogController', createTaskDialogController);
            
            function tasksController(\$scope, \$mdDialog, \$http){
                var dataFromServer = (\"";
        // line 29
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["listTasks"]) ? $context["listTasks"] : $this->getContext($context, "listTasks"))), "html", null, true);
        echo "\").replace(/&quot;/g, \"\");
                
                dataFromServer = dataFromServer.replace(\"[[\", \"\");
                dataFromServer = dataFromServer.replace(\"]]\", \"\");
                dataFromServer = dataFromServer.split(\"],[\");
                
                \$scope.userRol = \"asd\";//(\"";
        // line 35
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol"))), "html", null, true);
        echo "\").replace(/&quot;/g, \"\");
                \$scope.userLogin = (\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin"))), "html", null, true);
        echo "\").replace(/&quot;/g, \"\");
                
                \$scope.tasks = [];
                
                for (var i = 0; i < dataFromServer.length; i++){
                    \$scope.tasks.push(dataFromServer[i].split(','));
                }
                
                //TaskTemplates/mainDialogTask.tmpl.html
                \$scope.showUpdateTaskDialog = function(ev, task) {
                    
                    \$mdDialog.show({
                        templateUrl: \"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("intranet_main_task_dialog2");
        echo "\",
                        locals: {
                            currentTask: task,
                            rol: \$scope.userRol
                        }, 
                        parent: angular.element(document.body),
                        targetEvent: ev,
                        clickOutsideToClose: true,
                        controller: updateTaskDialogController
                    });
                }
                
                \$scope.showCreateTaskDialog = function(ev) {
                    
                    \$mdDialog.show({
                        templateUrl: \"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("intranet_main_task_dialog2");
        echo "\",
                        parent: angular.element(document.body),
                        targetEvent: ev,
                        clickOutsideToClose: true,
                        controller: createTaskDialogController
                    });
                }
                
                \$scope.getTasksOfUser = function(){
                    
                    \$http({
                        method: 'GET',
                        url: window.location.pathname+'/../../api/users/'+\$scope.userLogin+'/tasks',
                        dataType: 'json',
                        headers: {'Content-Type': 'application/json'}
                    })
                    .then(function success(response){
                        
                        \$scope.tasksList = response.data;
                        console.log(\$scope.tasksList);
                    }, function error(response){
                        console.log(\"Error:\" +response.statusText);
                    });
                }
                
                \$scope.getAllTasks = function(){
                    
                    \$http({
                        method: 'GET',
                        url: window.location.pathname+'/../../api/tasks',
                        dataType: 'json',
                        headers: {'Content-Type': 'application/json'}
                    })
                    .then(function success(response){
                        
                        \$scope.tasksList = response.data;
                        console.log(\$scope.tasksList);
                    }, function error(response){
                        console.log(\"Error:\" +response.statusText);
                    });
                }
                
                \$scope.deleteTask = function(taskId){
                    
                     \$http({
                        method: 'DELETE',
                        url: window.location.pathname+'/../../api/tasks/'+taskId,
                        dataType: 'json',
                        headers: {'Content-Type': 'application/json'}
                    })
                    .then(function success(response){
                        
                         //\$scope.\$watch('tasksList', function(){
                             \$scope.getAllTasks();
                         //});
                    }, function error(response){
                        console.log(\"Error:\" +response.statusText);
                    });
                }
                
                
            }
            
            function createTaskDialogController(\$scope, \$mdDialog, \$http){
                
                \$scope.getInfo = function(){
                    
                    //AJAX call requesting all users in the database with the field \"onboard\" set to \"true\".
                    \$http({
                        method: 'GET',
                        url: window.location.pathname+'/../../api/users/all/onboard',
                        dataType: 'json',
                        headers: {'Content-Type': 'application/json'}
                    })
                    .then(function success(response){
                        
                        \$scope.allUsers = response.data;
                        
                    }, function error(response){
                        console.log(\"Error:\" +response.statusText);
                    });
                };
                
                \$scope.closeDialog = function() {
                    \$mdDialog.hide();
                };
            }
            
            function updateTaskDialogController(\$scope, \$mdDialog, \$http, currentTask, rol){
                
                \$scope.userRol = \"rol\";
                \$scope.task = currentTask;
                
                \$scope.getInfo = function(){
                    
                    //AJAX call requesting the task info, its list of users and the list of all users in the database.
                    \$http({
                        method: 'GET',
                        url: window.location.pathname+'/../../api/tasks/'+\$scope.task.id+'/users',
                        dataType: 'json',
                        headers: {'Content-Type': 'application/json'}
                    })
                    .then(function success(response){
                        
                        \$scope.allData = {
                            \"taskData\": response.data.taskData,
                            \"taskUsers\": \$.map(response.data.usersInTask, function(elem){return elem.login}),
                            \"allUsers\": response.data.allUsers
                        };
                        
                        \$scope.allUsers = \$scope.allData.allUsers;
                        \$scope.usersInTaskShownToDeveloper = \$scope.allData.allUsers.filter(function(user){
                            
                            if ((\$scope.allData.taskUsers).indexOf(user.login) > -1)
                                return user;
                        });
                    }, function error(response){
                        console.log(\"Error:\" +response.statusText);
                    });
                };
                
                \$scope.closeDialog = function() {
                    \$mdDialog.hide();
                };
                
                \$scope.alreadyIn = function(user){
                    
                    return (\$scope.allData.taskUsers).indexOf(user.login) > -1;
                };
                
                \$scope.toggle = function(user){
                 
                    var index = (\$scope.allData.taskUsers).indexOf(user.login);
                    
                    if (index > -1)
                        (\$scope.allData.taskUsers).splice(index, 1);
                    else
                        (\$scope.allData.taskUsers).push(user.login);
                };
                
                \$scope.update = function(){
                    var input = \$(document.createElement(\"input\"));
                    input.attr('type', 'hidden')
                        .attr('name', \"users\")
                        .attr('value', \$scope.allData.taskUsers);
                    \$(\"#taskUpdateForm\").append(input);//('<input type=\"hidden\" name=\"users\" value=\"'+\$scope.allData.taskUsers+'\">');
                    \$(\"#taskUpdateForm\").submit();
                };
            }
            
            
        </script>
<script>
    
    var prueba;
    //prueba.push(";
        // line 218
        echo "'";
        echo "'";
        echo ");
    //prueba = JSON.parse(";
        // line 219
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["listTasks"]) ? $context["listTasks"] : $this->getContext($context, "listTasks"))), "html", null, true);
        echo ");
    prueba = \"";
        // line 220
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["listTasks"]) ? $context["listTasks"] : $this->getContext($context, "listTasks"))), "html", null, true);
        echo "\";
    //var kis = \$.map(prueba, function(el) { return el });
    prueba = prueba.replace(/&quot;/g, \"\");
    console.log(prueba);
</script>

<div ng-cloak ng-app=\"MyApp\" ng-controller=\"tasksController\" ng-init=\"userRol == 'developer' ? getTasksOfUser() : getAllTasks()\">
    
    <md-list>
<!--
        <md-divider></md-divider>
        <md-subheader class=\"md-no-sticky\">
-->
            <md-button class=\"md-raised md-primary\" ng-click=\"showCreateTaskDialog(\$event)\" ng-if=\"userRol != developer\">New Task</md-button>
<!--                    </md-subheader>-->
        <md-divider></md-divider>
        <md-divider></md-divider>
        <md-list-item style=\"font-size: large\" ng-model=\"prueba\">
            <span style=\"width: 15%\">Title</span>
            <span style=\"width: 60%\">Description</span>
            <span style=\"width: 15%\">Owner</span>
        </md-list-item>
        <md-divider></md-divider>
        <md-divider></md-divider>
        <div ng-repeat=\"task in tasksList track by \$index\">
            <md-list-item ng-click=\"showUpdateTaskDialog(\$event, task)\">
    <!--
                <span style=\"width: 15%\">{[{task[1]}]}</span>
                <span style=\"width: 70%\">{[{task[2]}]}</span>
                <span style=\"width: 15%\">{[{task[3]}]}</span>
    -->
                <span style=\"width: 15%\">{[{task.title}]}</span>
                <span style=\"width: 60%\">{[{task.content}]}</span>
                <span style=\"width: 15%\">{[{task.who_create}]}</span>
                <div>
                    <md-button style=\"width: 10%\" class=\"md-raised md-secondary\" ng-click=\"deleteTask(task.id)\" ng-if=\"userRol != 'developer'\">X</md-button> <!--sustituir por el icono de abajo-->
                </div>
            
            </md-list-item>
<!--            <md-icon md-svg-src=\"/es/ic_delete_black_24px.svg\" aria-label=\"android \"></md-icon>-->
            <md-divider></md-divider>
        </div>
    </md-list>
</div>








";
        
        $__internal_11c26d69a8d5fd38e7e601b553dd216fc2b05212680cfe8eb3a61ce8e98e68b1->leave($__internal_11c26d69a8d5fd38e7e601b553dd216fc2b05212680cfe8eb3a61ce8e98e68b1_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 220,  276 => 219,  271 => 218,  113 => 63,  95 => 48,  80 => 36,  76 => 35,  67 => 29,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">*/
/*         <link rel="stylesheet" href="taskStyles.css">*/
/*         <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>*/
/*         <script src="moment.min.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>*/
/*         <script src="http:////ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>*/
/*         <script src="http://ngmaterial.assets.s3.amazonaws.com/svg-assets-cache.js"></script>*/
/*         <script src="https://code.jquery.com/jquery-1.12.3.min.js"   integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>*/
/*         <script src="//cdnjs.cloudflare.com/ajax/libs/angular-material-icons/0.7.0/angular-material-icons.min.js"></script> */
/*         <script>*/
/*             var app = angular.module('MyApp',['ngRoute', 'ngMaterial', 'ngMessages', 'material.svgAssetsCache', 'ngMdIcons']);*/
/*             app.config(function($interpolateProvider){*/
/*                 $interpolateProvider.startSymbol('{[{').endSymbol('}]}');});*/
/*             app.controller('tasksController', tasksController);*/
/*             app.controller('updateTaskDialogController', updateTaskDialogController);*/
/*             app.controller('createTaskDialogController', createTaskDialogController);*/
/*             */
/*             function tasksController($scope, $mdDialog, $http){*/
/*                 var dataFromServer = ("{{listTasks | json_encode()}}").replace(/&quot;/g, "");*/
/*                 */
/*                 dataFromServer = dataFromServer.replace("[[", "");*/
/*                 dataFromServer = dataFromServer.replace("]]", "");*/
/*                 dataFromServer = dataFromServer.split("],[");*/
/*                 */
/*                 $scope.userRol = "asd";//("{{rol | json_encode()}}").replace(/&quot;/g, "");*/
/*                 $scope.userLogin = ("{{userLogin | json_encode()}}").replace(/&quot;/g, "");*/
/*                 */
/*                 $scope.tasks = [];*/
/*                 */
/*                 for (var i = 0; i < dataFromServer.length; i++){*/
/*                     $scope.tasks.push(dataFromServer[i].split(','));*/
/*                 }*/
/*                 */
/*                 //TaskTemplates/mainDialogTask.tmpl.html*/
/*                 $scope.showUpdateTaskDialog = function(ev, task) {*/
/*                     */
/*                     $mdDialog.show({*/
/*                         templateUrl: "{{path('intranet_main_task_dialog2')}}",*/
/*                         locals: {*/
/*                             currentTask: task,*/
/*                             rol: $scope.userRol*/
/*                         }, */
/*                         parent: angular.element(document.body),*/
/*                         targetEvent: ev,*/
/*                         clickOutsideToClose: true,*/
/*                         controller: updateTaskDialogController*/
/*                     });*/
/*                 }*/
/*                 */
/*                 $scope.showCreateTaskDialog = function(ev) {*/
/*                     */
/*                     $mdDialog.show({*/
/*                         templateUrl: "{{path('intranet_main_task_dialog2')}}",*/
/*                         parent: angular.element(document.body),*/
/*                         targetEvent: ev,*/
/*                         clickOutsideToClose: true,*/
/*                         controller: createTaskDialogController*/
/*                     });*/
/*                 }*/
/*                 */
/*                 $scope.getTasksOfUser = function(){*/
/*                     */
/*                     $http({*/
/*                         method: 'GET',*/
/*                         url: window.location.pathname+'/../../api/users/'+$scope.userLogin+'/tasks',*/
/*                         dataType: 'json',*/
/*                         headers: {'Content-Type': 'application/json'}*/
/*                     })*/
/*                     .then(function success(response){*/
/*                         */
/*                         $scope.tasksList = response.data;*/
/*                         console.log($scope.tasksList);*/
/*                     }, function error(response){*/
/*                         console.log("Error:" +response.statusText);*/
/*                     });*/
/*                 }*/
/*                 */
/*                 $scope.getAllTasks = function(){*/
/*                     */
/*                     $http({*/
/*                         method: 'GET',*/
/*                         url: window.location.pathname+'/../../api/tasks',*/
/*                         dataType: 'json',*/
/*                         headers: {'Content-Type': 'application/json'}*/
/*                     })*/
/*                     .then(function success(response){*/
/*                         */
/*                         $scope.tasksList = response.data;*/
/*                         console.log($scope.tasksList);*/
/*                     }, function error(response){*/
/*                         console.log("Error:" +response.statusText);*/
/*                     });*/
/*                 }*/
/*                 */
/*                 $scope.deleteTask = function(taskId){*/
/*                     */
/*                      $http({*/
/*                         method: 'DELETE',*/
/*                         url: window.location.pathname+'/../../api/tasks/'+taskId,*/
/*                         dataType: 'json',*/
/*                         headers: {'Content-Type': 'application/json'}*/
/*                     })*/
/*                     .then(function success(response){*/
/*                         */
/*                          //$scope.$watch('tasksList', function(){*/
/*                              $scope.getAllTasks();*/
/*                          //});*/
/*                     }, function error(response){*/
/*                         console.log("Error:" +response.statusText);*/
/*                     });*/
/*                 }*/
/*                 */
/*                 */
/*             }*/
/*             */
/*             function createTaskDialogController($scope, $mdDialog, $http){*/
/*                 */
/*                 $scope.getInfo = function(){*/
/*                     */
/*                     //AJAX call requesting all users in the database with the field "onboard" set to "true".*/
/*                     $http({*/
/*                         method: 'GET',*/
/*                         url: window.location.pathname+'/../../api/users/all/onboard',*/
/*                         dataType: 'json',*/
/*                         headers: {'Content-Type': 'application/json'}*/
/*                     })*/
/*                     .then(function success(response){*/
/*                         */
/*                         $scope.allUsers = response.data;*/
/*                         */
/*                     }, function error(response){*/
/*                         console.log("Error:" +response.statusText);*/
/*                     });*/
/*                 };*/
/*                 */
/*                 $scope.closeDialog = function() {*/
/*                     $mdDialog.hide();*/
/*                 };*/
/*             }*/
/*             */
/*             function updateTaskDialogController($scope, $mdDialog, $http, currentTask, rol){*/
/*                 */
/*                 $scope.userRol = "rol";*/
/*                 $scope.task = currentTask;*/
/*                 */
/*                 $scope.getInfo = function(){*/
/*                     */
/*                     //AJAX call requesting the task info, its list of users and the list of all users in the database.*/
/*                     $http({*/
/*                         method: 'GET',*/
/*                         url: window.location.pathname+'/../../api/tasks/'+$scope.task.id+'/users',*/
/*                         dataType: 'json',*/
/*                         headers: {'Content-Type': 'application/json'}*/
/*                     })*/
/*                     .then(function success(response){*/
/*                         */
/*                         $scope.allData = {*/
/*                             "taskData": response.data.taskData,*/
/*                             "taskUsers": $.map(response.data.usersInTask, function(elem){return elem.login}),*/
/*                             "allUsers": response.data.allUsers*/
/*                         };*/
/*                         */
/*                         $scope.allUsers = $scope.allData.allUsers;*/
/*                         $scope.usersInTaskShownToDeveloper = $scope.allData.allUsers.filter(function(user){*/
/*                             */
/*                             if (($scope.allData.taskUsers).indexOf(user.login) > -1)*/
/*                                 return user;*/
/*                         });*/
/*                     }, function error(response){*/
/*                         console.log("Error:" +response.statusText);*/
/*                     });*/
/*                 };*/
/*                 */
/*                 $scope.closeDialog = function() {*/
/*                     $mdDialog.hide();*/
/*                 };*/
/*                 */
/*                 $scope.alreadyIn = function(user){*/
/*                     */
/*                     return ($scope.allData.taskUsers).indexOf(user.login) > -1;*/
/*                 };*/
/*                 */
/*                 $scope.toggle = function(user){*/
/*                  */
/*                     var index = ($scope.allData.taskUsers).indexOf(user.login);*/
/*                     */
/*                     if (index > -1)*/
/*                         ($scope.allData.taskUsers).splice(index, 1);*/
/*                     else*/
/*                         ($scope.allData.taskUsers).push(user.login);*/
/*                 };*/
/*                 */
/*                 $scope.update = function(){*/
/*                     var input = $(document.createElement("input"));*/
/*                     input.attr('type', 'hidden')*/
/*                         .attr('name', "users")*/
/*                         .attr('value', $scope.allData.taskUsers);*/
/*                     $("#taskUpdateForm").append(input);//('<input type="hidden" name="users" value="'+$scope.allData.taskUsers+'">');*/
/*                     $("#taskUpdateForm").submit();*/
/*                 };*/
/*             }*/
/*             */
/*             */
/*         </script>*/
/* <script>*/
/*     */
/*     var prueba;*/
/*     //prueba.push({#% for task in listTasks %#}'{#task#}'{#% endfor %#});*/
/*     //prueba = JSON.parse({{listTasks | json_encode()}});*/
/*     prueba = "{{listTasks | json_encode()}}";*/
/*     //var kis = $.map(prueba, function(el) { return el });*/
/*     prueba = prueba.replace(/&quot;/g, "");*/
/*     console.log(prueba);*/
/* </script>*/
/* */
/* <div ng-cloak ng-app="MyApp" ng-controller="tasksController" ng-init="userRol == 'developer' ? getTasksOfUser() : getAllTasks()">*/
/*     */
/*     <md-list>*/
/* <!--*/
/*         <md-divider></md-divider>*/
/*         <md-subheader class="md-no-sticky">*/
/* -->*/
/*             <md-button class="md-raised md-primary" ng-click="showCreateTaskDialog($event)" ng-if="userRol != developer">New Task</md-button>*/
/* <!--                    </md-subheader>-->*/
/*         <md-divider></md-divider>*/
/*         <md-divider></md-divider>*/
/*         <md-list-item style="font-size: large" ng-model="prueba">*/
/*             <span style="width: 15%">Title</span>*/
/*             <span style="width: 60%">Description</span>*/
/*             <span style="width: 15%">Owner</span>*/
/*         </md-list-item>*/
/*         <md-divider></md-divider>*/
/*         <md-divider></md-divider>*/
/*         <div ng-repeat="task in tasksList track by $index">*/
/*             <md-list-item ng-click="showUpdateTaskDialog($event, task)">*/
/*     <!--*/
/*                 <span style="width: 15%">{[{task[1]}]}</span>*/
/*                 <span style="width: 70%">{[{task[2]}]}</span>*/
/*                 <span style="width: 15%">{[{task[3]}]}</span>*/
/*     -->*/
/*                 <span style="width: 15%">{[{task.title}]}</span>*/
/*                 <span style="width: 60%">{[{task.content}]}</span>*/
/*                 <span style="width: 15%">{[{task.who_create}]}</span>*/
/*                 <div>*/
/*                     <md-button style="width: 10%" class="md-raised md-secondary" ng-click="deleteTask(task.id)" ng-if="userRol != 'developer'">X</md-button> <!--sustituir por el icono de abajo-->*/
/*                 </div>*/
/*             */
/*             </md-list-item>*/
/* <!--            <md-icon md-svg-src="/es/ic_delete_black_24px.svg" aria-label="android "></md-icon>-->*/
/*             <md-divider></md-divider>*/
/*         </div>*/
/*     </md-list>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
