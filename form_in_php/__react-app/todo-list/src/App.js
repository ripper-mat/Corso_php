import './components/taskItem/TaskItem.css'
import TaskItem from './components/taskItem/TaskItem';
import './App.css'
import TaskList from './components/TaskList/TaskList';
import {useState} from 'react'
import SearchBar from './components/SearchBar';
import { activeFilter, addTask, completedFilter, removeTask } from './service/TOdoService';

function App() {
  // const [taskListData, setTaskListData] = useState([])
  // const taskListData=[
  //   {
  //     task_id: 10,
  //     user_id: 12,
  //     name: "comprare il latte",
  //     due_date:"2022-04-04",
  //     done:false
  //   },
    
      // {
      //   user_id: 11,
      //   name: "Uccidere tutti",
      //   due_date: "2023-04-04",
      //   done: true,
      //   task_id: 5
      // }
    
  // ]
  // const taskListData = []
  const [taskListData, setTasklistData]= useState([])
  
  // function aggiungiTask(){
  //   setTasklistData((attuale)=>{
  //     attuale.push({
  //         user_id: 11,
  //         name: "Uccidere tutti",
  //         due_date: "2023-04-04",
  //         done: true,
  //         task_id: 5
  //     })
  //     console.log(attuale)
  //     return attuale
  //   })
  // }

  // const list = taskListData.map(task => <TaskItem nome_task={task.name}/>)

  function parentAddTask(newTask){
    // TODO USER_ID
    const newTaskListData = addTask(newTask, taskListData)
    // console.log(newTaskListData)
    setTasklistData(newTaskListData)
  }

  function parentRemoveTask(taskId){
    console.log("parentRemove "+taskId)
    const res = removeTask(taskId,taskListData)
    setTasklistData(res)
  }

  const [filteredTasks, setFilteredTasks] = useState(taskListData)
  function onShowCompleted() {
    // chiamo il servizio
    // aggiorno lo stato
    const res = completedFilter(taskListData)
    setFilteredTasks(res)
  }

  function onShowAll(){
    setFilteredTasks(taskListData)
  }

  function onShowActive(){
    const res = activeFilter(taskListData)
    setFilteredTasks(res)
  }

  return(
  <main>
    {/* <button onClick={aggiungiTask}>Add task</button> */}
    <SearchBar parentAddTask={parentAddTask}></SearchBar><br/><br/>
    <button className='filterBtn' onClick={onShowAll}>all</button>
    <button className='filterBtn' onClick={onShowActive}>active</button>
    <button className='filterBtn' onClick={onShowCompleted}>completed</button><br/>
    <TaskList header={'Paolo'} task={taskListData}>
      {filteredTasks.map(task => <TaskItem key={task.task_id}
      parentRemoveTask={parentRemoveTask}
       id={task.id}
       done={task.done} 
       nome_task={task.name}
       />)}
    </TaskList>
    {/* <TaskList header={'Giovanni'} task={taskListData}>
      {taskListData.map(task => <TaskItem key={task.task_id} done={task.done} nome_task={task.name}/>)}
    </TaskList> */}
  </main>
  )
}


export default App;
