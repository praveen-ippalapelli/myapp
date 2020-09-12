import React from 'react';

const Header = () => {
    return(
        <nav>
            <div className="container">
            <div className="nav-brand">
                <a href="/">Find&nbsp;Jobs</a>
            </div>
            <ul className="nav-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/">Home2</a></li>
                <li><a href="/">Home3</a></li>
            </ul>
            </div>
        </nav>
    );
}

export default Header;