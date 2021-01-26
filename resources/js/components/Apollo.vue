<template>
    <div class="container">
        <div class="header">
            <h1>Apollo Exam</h1>
        </div>

        <div class="sub-header">
            <h4>Mhar Adrian N. Mateo this.num1</h4>
            <h6>zenasmhar15@gmail.com</h6>
        </div>

        <div class="main">
            <div class="spiral">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <path id="MyPath"
                    d="M50 50 Q55 50 ,55 55 
                       M55 55 Q50 60 ,45 55
                       M45 55 Q40 45 ,53 44
                       M53 44 Q65 45 ,61 55
                       M61 55 Q60 65, 50 65
                       M50 65 Q40 65, 35 50
                       M35 50 Q35 35, 50 35
                       M50 35 Q65 35, 70 50"/>
            </defs>

            <use xlink:href="#MyPath" fill="none" stroke-width="0.1" stroke="white"  />

            <text font-family="Verdana" font-size="1">
                <textPath xlink:href="#MyPath">
                {{outpt.outputtext}}
                </textPath>
            </text>

            </svg>

            </div>
            
        </div>

    </div>
    
</template>

<script>
    export default {
        mounted(){
            console.log('Mounted')

            axios.post('api/randomvalue')
                .then(response => {
                    this.outpt = response.data;
                });    
        },
        // Declaration of null variables
        data: function() {
            return{
                outpt : null,
            }
        },

    }
</script>

<style>

    .container{
        background-color:rgba(249, 255, 255, 0.719);
        text-align: center;
        padding: 1%;
        margin: -10px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .container h1{
        font-style: bold;
        font-size: 25px;
    }
    .sub-header{
        line-height: .1;
        text-align: right;
        font-size:12px
    }
    .sub-header h6{
        font-style: normal;
        margin-top:-3px;
    }
    .main{
        border: 1px solid black;
        padding: 60px;
    }
    .spiral{
        text-align: center;
    }

</style>
