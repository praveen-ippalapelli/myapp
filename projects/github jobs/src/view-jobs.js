import React from 'react';

const JobsList = ({job}) => {
    return(
        <div className="job-info">
            <div className="job-title">{job.title}</div>
            <div className="company">{job.company}</div>
            <div className="location">{job.location}</div>
            <a href={job.company_url} target="_blank" className="apply bg-primary">apply now</a>
            <br />
        </div>
    );
}

export default JobsList;