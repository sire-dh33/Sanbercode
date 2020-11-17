<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Simple Users CRUD</title>

    <hr>
        <p><strong>Simple User CRUD with Axios</strong></p>
    <hr>
    
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.js"></script>
</head>

<body>
  <div id="todoapp">
    <form>
      <input type="text" v-model="form.name">
      <button v-on:click.prevent="add" v-show="!showupdate">Add</button>
      <button v-on:click.prevent="update" v-show="showupdate">Update</button>
    </form>

    <ul v-for="(person, index) in persons ">
      <li>
        <span>@{{ person.name }} </span>
        <button v-on:click="edit(person, index)">Edit</button> || 
        <button v-on:click="del(index)">Delete</button>
      </li>
    </ul>

  </div>

  <script>
    new Vue({
      el: '#todoapp',      
      data: {
        persons : [
          {
            'name' : 'Sultan Dharmawan'
          },
          {
            'name' : 'Mark Zuckerberg'
          },
          {
            'name' : 'Larry Page'
          }
        ],
        showupdate : false,
        form : {
          'name' : ''
        },
        SelectedPersonId : '',
      },
    //   created: () {
    //      this.loadData();
    //   },
      methods : {
        // loadData() {
        //     // fetch data dari api menggunakan axios
        //     axios.get("http://localhost:8000/api/person").then(response => {
        //         // mengirim data hasil fetch ke varibale array persons
        //         this.persons = response.data;
        //     });
        // },
        add(){
          let inputtxt = this.form.name
          this.persons.push(this.form)
          this.form = {'name' : ''}
            // post data ke api menggunakan axios
            // axios.post("http://localhost:8000/api/person", {
            //     name: this.form.name
            // })
            // .then(response => {
            //     this.form = {'name' : ''}
            // });

        },
        edit(person, index){
          this.SelectedPersonId = index
          this.showupdate = true
          this.form.name = person.name
            // loadData() {
            // // load data berdasarkan id
            // axios
            //     .get("http://localhost:8000/api/person/" + this.$route.params.id)
            //     .then(response => {
            //     // post value yang dari response ke form
            //     this.form.name = response.data.name;
            // });

        },
        update(){
          let updatetxt = this.form.name
          this.persons[this.SelectedPersonId].name = updatetxt
          this.form = {'name' : ''}
          this.showupdate = false
            // put data ke api menggunakan axios
            // axios
            //     .put("http://localhost:8000/api/person/" + this.$route.params.id, {
            //     name: this.form.name
            //     })
            //     .then(response => {
            //     // push router ke read data
            //     this.showupdate = false
            // });

        },
        del(index){
          let confirmdel = confirm('Are You Sure ?')
          if (confirmdel)
            this.persons.splice(index, 1)
            // // delete data
            // axios.delete("http://localhost:8000/api/person/" + id).then(response => {
            //     this.loadData();
            // });

        }
      }
    })
  </script>

</body>
</html>