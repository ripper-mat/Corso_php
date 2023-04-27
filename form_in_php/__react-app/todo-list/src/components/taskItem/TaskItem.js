
function TaskItem({nome_task, done, id, parentRemoveTask}) {

    function onRemoveTask() {
        console.log("task "+ id)
        parentRemoveTask(id)
    }

    function onUpdateStatus() {
        console.log(id, done)
    }

    return(
           
        <li className={done ? 'done' : ''}>
            <div className="lblNbtns">
                <input onChange={onUpdateStatus} checked={done} type= "checkbox"></input>
            <label className="labelTask">{nome_task} </label>
            <div className="listBtn">
            <button className="btn">Edit</button>
            <button className="btn" onClick={onRemoveTask}>Delete</button>
            </div>
            </div>
        </li>
            
    )
}

export default TaskItem