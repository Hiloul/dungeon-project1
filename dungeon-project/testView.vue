<template>
    <!-- Recupere de la BDD -->
    <div>
        <h2>Liste des contacts</h2>
        <ul>
            <li v-for="contact in contacts" :key="contact.id">
    <p>prenom: {{contact.firstname}}</p>
    <p>prenom: {{contact.lastname}}</p>
    <p>prenom: {{contact.numberphone}}</p>
            </li>
        </ul>
        <form @submit.prevent="createContact">
<input type="text" v-model="firstname">
<input type="text" v-model="lastname">
<input type="number" v-model="numberphone">
<input type="submit" value="Valider">

        </form>
        <p>{{feedbackMessage}}</p>
    </div>
    </template>
    
    <script>
        export default{
    name:"App",
    
    data(){
    
        return{
    
    contacts:[],
    firstname:"",
    lastname:"",
    numberphone:"",
    feedbackMessage:"",
        };


        
    },
    
    methods:{
        async getContacts(){
    const response = await fetch("http://127.0.0.1:8000/api/contacts", {
        method:"GET",
        headers:{
            "Accept": "application/json",
        },
    });
    const data = await response.json();
    this.contacts= data.contacts;
    
    
        },
        async createContact(){
            const body = {
                firstname:this.firstname,
                lastname:this.lastname,
                numberphone:this.numberphone,
            };
            const response = await fetch("http://127.0.0.1:8000/api/contacts",{
                method: "POST",
                headers:{
                    "Content-Type": "application/json",
                    "Accept":"application/json",
                },
                body: JSON.stringify(body),
            });
            const data =await response.json();
            this.feedbackMessage = data.message;
        }
    },
    
    mounted(){
        this.getContacts();
    },
    
        };
    </script>