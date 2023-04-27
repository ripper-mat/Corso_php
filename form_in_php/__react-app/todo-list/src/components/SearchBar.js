import { useState } from "react"

const SearchBar = (props) => {

    // hook useState const taskName | const setTaskName
    // taskName è la variabile che contiene lo stato attuale
    // setTaskName è la funzione che devo chiamare ogni volta che devo comunicare a react che
    // il valore di taskName è cambiato
    const [taskName, setTaskName] = useState('')
    const [taskDueDate, setTaskDueDate] = useState('')
  
    function onAddTask(){
        const newTask = {
            name:taskName.trim(),
            due_date: taskDueDate,
            done:false
        }
        props.parentAddTask(newTask)
        // console.log(newTask)
        setTaskName('')
    }

    return (
        <section className="container">
            {/* <pre>
                {taskName}
                {taskDueDate}
            </pre> */}
        <div>
            {/* var taskName = document.getElementById("myselect").value; */}
            {/* [ ] assegnare una variabile di stato al value */}
            {/* [ ] assegnare onChange */}
        <input type="text" 
        value={taskName}
        onChange={evento => setTaskName(evento.target.value)}
        id="myInput" placeholder="Aggiungi/Cerca"/><br/>
        {/* {!taskName.trim().length>0?'si' : 'no'} */}
        <button 
            type="submit"
            className="addBtn btn"
            onClick={onAddTask}
            disabled={!taskName.trim().length>0 ? 'devi inserire un titolo' : ''}
        >Add</button><br/><br/><br/><br/>
        </div>
            
        <div>
        <input type="date" 
        value={taskDueDate}
        onChange={evento => setTaskDueDate(evento.target.value)}
        /><br/>
        </div>
        </section>
    )
}

export default SearchBar