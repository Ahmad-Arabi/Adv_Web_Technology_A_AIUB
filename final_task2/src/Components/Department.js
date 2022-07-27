const Department =(props)=>
{
    return(
        <div>
            <center>
                <fieldset>
                    <legend align="center">Department</legend>
                    <h3>{props.id}</h3>
                    <h3>{props.name}</h3>
                </fieldset>
            </center>
        </div>
    )
}
export default Department;