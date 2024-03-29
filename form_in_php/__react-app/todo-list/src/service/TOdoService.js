
export const addTask = (newTask, todos) => {
    if(newTask.name===undefined || newTask.name.trim()=== ""){
        throw new Error("manca il nome della task")
    }
    // fai un a copia shallow
    const todosCopy = new Array(...todos)
    const newTaskCopy = {...newTask,...{name:newTask.name.trim()}}
    newTaskCopy.id = (new Date()).getTime()
    // cambia la copia
    todosCopy.push(newTaskCopy)
    return todosCopy
}
export const removeTask = (task_id, todos) => {
    const todosCopy = new Array(...todos)
    const indexToRemove = todosCopy.findIndex(task=>task.id===task_id)
    todosCopy.splice(indexToRemove,1)
    return todosCopy

}
export const updateTask = (taskToUpdate, todos) => {
    const todosCopy = new Array(...todos)
    return todosCopy.map(task => {
        if(task.id === taskToUpdate.id){
            return {...task,...taskToUpdate}
        }
        return task
    })


}




export const activeFilter = (todos) => {
    const newTodos = todos.filter(task=>!task.done)
    return newTodos
}

export const completedFilter = todos => todos.filter(task => task.done)

export const dateFilter = (date, todos) => {
    const todosCopy = new Array(...todos)
    if(todosCopy.filter(task=>task.due_date)===date){
        return date
    }else{
        todosCopy.filter(task=>task.due_date)
        return todos
    }

}

