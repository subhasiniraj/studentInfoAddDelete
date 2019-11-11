//external javascript
//student information
         Vue.component('studentinfo',{
//             html template created
            template : '<div class = " stdBox"><div class = " stdDetails"  v-bind:style = "styleobj"><div class = "stdInfo"><p>{{itr.fathername}}</p></div><div class = "stdInfo"><p>{{itr.stdname}}</p></div><div class = "stdInfo"><p>{{itr.addr}}</p></div><div class = "stdInfo"><p><button class=" delete " v-on:click = "$emit(\'removeelement\')">X</button></p></div></div></div>',
            props: ['itr', 'index'],
            data: function() {
               return {
//                   binding style object
                  styleobj : {
                     backgroundColor:this.getcolor(),
                     fontSize : 20
                  }
               }
            },
            methods:{
//                both case style modefied
               getcolor : function() {
                  if (this.index % 2) {
                     return "#8080804d";
                  } else {
                     return "#f8f8f8";
                  }
               }
            }
         });
         var vm = new Vue({
//             studentdata added here
            el: '#studentdata',
            data: {
               fathername:'',
               stdname:'',
               addr : '',
               stddet:[],
               styleobj: {
                  cursor: 'pointer',
                  padding: '8px 16px',
                  verticalAlign: 'middle',
               }
            },
            methods :{
               showdata : function() {
//                   pushing student details
                  this.stddet.push({
                     fathername: this.fathername,
                     stdname: this.stdname,
                     addr : this.addr
                  });
                  this.fathername = "";
                  this.stdname = "";
                  this.addr = "";
               }
            }
         });
