Vue.component("users" , {
    template : "#users-template",
    props : ["user", "usertxt"],
    data : function () {
        return {
            
        }
    },
    methods : {
        edit : function (name) {
        
        },
        del : function (index) {
            delete this.user
        },
    },
    computed: {
        usertxt : function (){
        // waktu quiz habis .. . harus dikumpulkan
        }   
    }

})

let viewapp = new Vue({
    el: "#app",
    data: {
        users : [
            {'name' : 'Dummy Name'},
            {'name' : 'Sultan Dharmawan'},
        ],
        usertxt : ""
    },
    methods : {
        postdata : function () {
        this.users.push({'name' : this.usertxt})
        this.usertxt = ""
        },

    }
})