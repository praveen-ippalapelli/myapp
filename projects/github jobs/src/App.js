import React, {useState} from 'react';
import JobsList from "./view-jobs";
import Header from "./header";
import './App.css';

function App() {

  const [jobs, setJobs] = useState([]);

  const cors_anywhere = "https://cors-anywhere.herokuapp.com";
  const api_origin = "https://jobs.github.com/positions.json";
  const find_title = "";
  const find_location = "usa";
  
  const getjobs = async (input_value) => {
    const api_url = `${cors_anywhere}/${api_origin}?description=${input_value}&location=${find_location}`;
    console.log("fetch api starts");
    const response = await fetch(api_url);
    const api_data = await response.json();
    console.log(api_data);
    console.log("fetch api ends");
    setJobs(api_data);
  }

  const update_search = e => {
    e.preventDefault();
    var search_value = document.querySelector('#search_input').value;
    console.log(search_value);
    getjobs(search_value);
  }

  return (
    <div className="App">
      <Header />
      <div className="container">
      <form onSubmit={update_search}>
        <input id="search_input" type="text" />
        <button type="submit">submit</button>
      </form>
      </div>
      <div className="container">
        <div className="jobs-found">
        <h1>No of jobs Found : {jobs.length}</h1>
        </div>
      <div className="jobs-list row">
      {
        jobs.map(job =>(
        <div key={job.id} className="col-lg-6 col-md-6">
          <JobsList job={job} />
        </div>
      ))}
      </div>
      </div>
    </div>
  );
}

export default App;
