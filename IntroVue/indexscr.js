Vue.component("comments" , {
    template : "#comments-template", 
    props : ["comment", "plusClicked", "minusClicked"],
    data : function () {
        return {
            plus : false,
            minus : false,
        }
    },
    methods : {
        plusMethod : function () {
            this.plus = !this.plus
            this.minus = false
            this.plusClicked = !this.plusClicked
            this.minusClicked = false
        },
        minusMethod : function () {
            this.minus = !this.minus
            this.plus = false
            this.minusClicked = !this.minusClicked
            this.plusClicked = false
        }
    },
    computed: {
        computedscore : function () {
            if (this.plus == true){
                return this.comment.score + 1
            }
            else if (this.minus == true){
                return this.comment.score - 1
            }
            else
            this.vote = ""
                return this.comment.score
                
        }
    }

})

let viewapp = new Vue({
    el: "#app",
    data: {
        datacomments: [],
        commenttxt : "",
        plusClicked : false,
        minusClicked : false
    },
    methods : {
        postComment : function () {
            let currentTime = new Date()
            let dd, mm, yyyy
            dd = currentTime.getDate()
            mm = currentTime.getMonth()
            yyyy = currentTime.getFullYear()
            this.datacomments.push(
                {body: this.commenttxt, date : `${dd}-${mm}-${yyyy}`, score : 5 }
            )
            this.commenttxt = ""
        }
    }
})