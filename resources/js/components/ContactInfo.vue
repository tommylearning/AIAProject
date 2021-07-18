<template>
<div class="row col-md-12 m-0">
    <div class="col-md-4 row m-0 p-0" v-for="contactDetail in filteredContactDetails" :key="contactDetail.id">
        <div class="w-100 row m-3 p-3 contact-container">
            <div class="col-md-3 mb-3 p-2">
                <img src="/image/userphoto-prime1.png" alt="">
            </div>
            <div class="col-md-8 py-2 px-3">
                <p class="title-text"><span style="font-weight:bold">{{contactDetail.name}}</span></p>
                <p>Email: <span style="font-weight:bold">{{contactDetail.email}}</span></p>
                <p>Phone number: <span style="font-weight:bold">{{contactDetail.phone}}</span></p>
                <p>Company: <span style="font-weight:bold">{{contactDetail.company}}</span></p>
                <p>Address: <span style="font-weight:bold">{{showAddress(contactDetail.address)}}</span></p>
                <p>Website: <span style="font-weight:bold">{{contactDetail.website}}</span></p>
                <p>Age: {{contactDetail.age}}</p>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name : 'ContactInfo',
    props : {
        contactDetails : Array,
        condition : String,
    },
    computed:{
        filteredContactDetails(){
            switch(this.condition) {
                case '20 and below':
                return this.contactDetails.filter(detail => detail.age <= 20)
                case '21 to 39':
                return this.contactDetails.filter(detail => detail.age >= 21 && detail.age <= 39)
                case '40 and above':
                return this.contactDetails.filter(detail => detail.age >= 40)
                default:
                return this.contactDetails
            }
        },
    },
    methods:{
        showAddress(address){
            const{suite,street,zipcode,city} = address
            return `${suite},${street},${zipcode},${city}`
        }
    }
}
</script>

<style scoped>
.title-text{
    font-size:30px
}

@media only screen and (min-width: 1024px) {
    .contact-container{
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }
}

</style>
