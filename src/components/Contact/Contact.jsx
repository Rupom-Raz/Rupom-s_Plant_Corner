import React from "react";
import "./Contact.css";
import ContactImg from "../../image/contact.jpg";
import HomeImg from "../../image/home.png";
import MessageImg from "../../image/message.png";
import PhoneImg from "../../image/phone.png";

const Contact = () => {
  return (
    <>
      <div className="container my-4">
        <div className="row contact_section  ">
          <h3>contact with us</h3>

          <div className="col-12 col-sm-12 col-md-5 col-lg-5  contact_img">
            <img className = "img-fluid" src={ContactImg} alt="" />
          </div>

          <div className="col-12 col-sm-12 col-md-7 col-lg-7 address_info">
            <div className="wrap_address">
              <div className="address_left">
                <img className = "img-fluid"  src={HomeImg} alt="" />
              </div>
              <div className="address_right">
                <h5>ADDRESS</h5>
                <p className = "address_details">
                  <span className = "address_details">France:</span> Contrada Isola 14, Macerata, 62100 France
                </p>
                <p className = "address_details">
                  <span>Filand:</span> Via Cavour, 14 30026 Portogruaro Filand
                </p>
                <p className = "address_details">
                  <span className = "address_details">Viet Nam:</span> 76 Le Lai Street, District 1, Ho Chi
                  Minh City, Vietnam
                </p>
              </div>
            </div>
            <div className="wrap_address">
              <div className="address_left">
                <img className = "img-fluid"  src={MessageImg} alt="" />
              </div>
              <div className="address_right">
                <h5>E-MAIL</h5>
                <p className = "address_details">
                  <span>France:</span> Contrada Isola 14, Macerata, 62100 France
                </p>
                <p className = "address_details">
                  <span>Filand:</span> Via Cavour, 14 30026 Portogruaro Filand
                </p>
                <p className = "address_details">
                  <span>Viet Nam:</span> 76 Le Lai Street, District 1, Ho Chi
                  Minh City, Vietnam
                </p>
              </div>
            </div>
            <div className="wrap_address">
              <div className="address_left">
                <img className = "img-fluid"  src={PhoneImg} alt="" />
              </div>
              <div className="address_right">
                <h5>PHONE</h5>
                <p className = "address_details">
                  <span>France:</span> Contrada Isola 14, Macerata, 62100 France
                </p>
                <p className = "address_details">
                  <span>Filand:</span> Via Cavour, 14 30026 Portogruaro Filand
                </p>
                <p className = "address_details">
                  <span>Viet Nam:</span> 76 Le Lai Street, District 1, Ho Chi
                  Minh City, Vietnam
                </p>
              </div>
            </div>
          </div>
        </div>

        <div className="row mt-3">
          <div className="col-12 col-sm-12 col-md-5 col-lg-5">
            <div className="newsletter_section">
              <form action="/">
                <div className="contact_login_form">
                  <h4>Get In Touch</h4>
                  <div className="contact_input-fields">
                    <div className="contact_name">
                      <input
                        type="text"
                        placeholder="Enter your name"
                        id="email"
                      />
                    </div>
                    <div className="contact_email">
                      <input
                        type="text"
                        placeholder="Enter your email"
                        id="email"
                      />
                    </div>
                    <div className="contact_phone">
                      <input
                        type="text"
                        placeholder="Enter your phone number"
                        id="email"
                      />
                    </div>
                    <div className="contact_subject">
                      <input
                        type="text"
                        placeholder="Enter your subject"
                        id="email"
                      />
                    </div>
                    <div className="contact_message">
                      <input type="text" placeholder="Enter Your message" />
                    </div>
                  </div>
                  <button className="contact_btn">Send</button>
                </div>
              </form>
            </div>
          </div>

          <div className="col-12 col-sm-12 col-md-7 col-lg-7 ">
            <div class="map_section ">
              <iframe 
              className = "iframe"
                title="google_map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47121.686054218146!2d91.82596217862815!3d24.899837316974715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d3d270329f%3A0xf58ef93431f67382!2sSylhet!5e1!3m2!1sen!2sbd!4v1621925089740!5m2!1sen!2sbd"
                
                style={{border:0}}
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default Contact;
