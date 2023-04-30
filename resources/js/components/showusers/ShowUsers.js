import React,{ useState, useEffect} from 'react';
import ReactDOM from 'react-dom';
//import { Link } from "react-router-dom";
//import Swal from 'sweetalert2'



function ShowUsers() {
    const  [users, setUsers] = useState([])
 
    useEffect(() => {
        fetchUsers()
    }, [])
 
const fetchUsers = () =>{
    axios.get('/api/users').then(function (response) {
   setUsers(response.data);
    })
    .catch(function (error) {
      console.log(error);
    })
}

    return (
        <div className="col-md-12">
        <div className="tile">
          <h3 className="tile-title">Users</h3>
          <div className="table-responsive">
            <table className="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email address</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
               
                {users.map((user, key)=>{
                                    return (
                                        <tr key={key}>
                                            <td>{user.name}</td>
                                            <td>{user.email}</td>
                                           
                                        </tr>
                                    )
                                })}
              
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    );
}

export default ShowUsers;

if (document.getElementById('showuser')) {
    ReactDOM.render(<ShowUsers />, document.getElementById('showuser'));
}
