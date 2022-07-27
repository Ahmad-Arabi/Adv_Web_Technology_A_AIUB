const Students=(props)=>
{
    return(
        <div>
            <center>
                <fieldset>
                    <legend align="center">Students</legend>
                    <h3>{props.Id}</h3>
                    <h3>{props.Name}</h3>
                    <h3>{props.Dob}</h3>
                    <h3>{props.Cgpa}</h3>
                </fieldset>
            </center>
        </div>
    )
}
export default Students;