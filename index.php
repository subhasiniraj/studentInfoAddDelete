<html>
    <head>
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <title class="title">Bulma Modifiers Example</title>
      <link rel = "stylesheet" href = "style.css">
      <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
      <script src = "https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
      
      <script type = "text/javascript" src = "https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
   </head>
   <body>
    <div class="box is-light">
      <div id = "studentdata">
         <h1 class="title is-3">Student Information </h1>
         <!--student table details-->
         <table class="table is-fullwidth is-bordered">
             <tr>
                 <th><label class="label">Student Name</label></th>
                 <th><label class="label">Father Name</label></th>
                 <th colspan="2"> <label class="label">Address</label></th>
             </tr>
             <tr>
                 <td><input type = "text" placeholder = "Enter Student Name" v-model = "fathername" /></td>
                 <td><input type = "text" placeholder = "Enter Father Name" v-model = "stdname"/></td>
                 <td><input type = "text" placeholder = "Enter Address" v-model = "addr"/></td>
                 <td><button class=" button is-success" v-on:click = "showdata" v-bind:style = "styleobj">Add</button></td>
             </tr>
         </table>
         
         <!--student information to bind-->
         <studentinfo
            v-for = "(item, index) in stddet"
            v-bind:item = "item"
            v-bind:index = "index"
            v-bind:itr = "item"
            v-bind:key = "item.fathername"
            v-on:removeelement = "stddet.splice(index, 1)">
         </studentinfo>
      </div>
      </div>
       <script type = "text/javascript" src="external.js">
       </script>
   </body>
</html>