import React from "react";
import "./About.css";
import about from "../../image/about.jpg";
const About = () => {
  return (
    <>
      <div className="container-fluid">
        <div className="row about">
          <div class="overlay"></div>
          <div className="col-12 col-sm-10 col-md-5 col-lg-5 m-auto">
            <div className="owner">
              <img className="img-fluid img " src={about} alt="" />
            </div>
          </div>
          <div className="col-12 col-sm-10 col-md-7 col-lg-7 m-auto">
            <div className="owner_words">
              <h3>Who We Are</h3>
              <p>
                It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions...
              </p>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default About;
