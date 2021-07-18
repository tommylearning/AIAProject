<template>
<div>
    <nav-bar></nav-bar>
    <div class=" title-container w-100">
        <h2 class="title-text">DISTRICT MANAGER</h2>
    </div>
    <div class="col-md-12 content-container">
        <p style="font-weight: bold" class="m-0">Filter By Age</p>
        <select style="width:10rem" v-model="condition">
            <option>All</option>
            <option>20 and below</option>
            <option>21 to 39</option>
            <option>40 and above</option>
        </select>
        <hr>
        <contact-info
            :contact-details="contactDetails"
            :condition="this.condition"
        ></contact-info>
        <hr>
        <label>Date</label>
        <div class="col-md-12 row">
            <datepicker v-model="date" placeholder="dd/mm/yyyy" format="dd/MM/yyyy" ></datepicker>
            <button @click="convertDate" class="ml-3 btn convert-button">CONVERT</button>
        </div>
        <p >Converted Date: <span style="font-weight: bold">{{covertedDate}}</span></p>
    </div>
</div>
</template>

<script>
    const dayjs = require('dayjs');
    import NavBar from "../components/NavBar.vue"
    import ContactInfo from "../components/ContactInfo.vue"
    import Datepicker from 'vuejs-datepicker';
    export default {
        name : 'DashboardComponent',
        components : {
            NavBar,
            ContactInfo,
            Datepicker,
        },
        props : {
            contactDetails : Array,
        },
        data(){
            return{
                condition : 'All',
                date : '',
                covertedDate : '',
            }
        },
        methods:{
            convertDate(){
                this.covertedDate = dayjs(this.date).format('YYYY-MM-DD')
            }
        },
}
</script>
<style scoped>
.title-container{
    height: 5rem;
    background-color:rgba(250,249,243,1);
    margin-bottom: 4rem;
}
.title-text{
    display: flex;
    height:100%;
    justify-content:center;
    align-items:center;
    font-weight: bold;
}
.convert-button{
    background: #d31145;
    color: white;
    font-size: 11px;
    font-weight: bold;
}
.content-container
{
    padding:0px 2rem;
}
@media only screen and (min-width: 1024px) {
    .content-container
    {
        padding:0px 6rem;
    }
}
</style>
