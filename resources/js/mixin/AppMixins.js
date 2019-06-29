export default {

    filters: {


        UpText: function(value){

            return value.charAt(0).toUpperCase() + value.slice(1)
        },

        FormatedDate: function(created){

            return moment(created).format("MMM Do YYYY")
        }


    }


}