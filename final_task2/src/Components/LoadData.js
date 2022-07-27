import Department from "./Department";
import Students from "./Students";
import { useState } from "react";
import axios from 'axios';

const LoadData=()=>{
    const[post,setPost]=useState({});
    const LoadData=()=>
    {
        axios.get("https://mocki.io/v1/72353acd-8db8-4293-9df4-2e6c22920b55").then((rsp)=>
        {
            setPost(rsp.data);
        },(err)=>{
            debugger;
        });

    }
    return(
        <div>
            <button onClick={LoadData}>Load Data</button>
            <Department id={post.Id} name={post.Name}/>
            <Students Id={post.Students[0].Id} Name={post.Students[0].Name} Dob={post.Students[0].Dob} Cgpa={post.Students[0].Cgpa}/> 
        </div>
    )
}
export default LoadData;