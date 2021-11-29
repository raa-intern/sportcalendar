import React from "react";
import { BsFacebook } from "react-icons/bs";
import { FaTelegramPlane } from "react-icons/fa";
import { GrInstagram } from "react-icons/gr";
import { FaPhoneSquareAlt } from "react-icons/fa";

import ToogleButton from "../ToogleButton/ToogleButton";
import {
  AppBar,
  Wrap,
  WrapLang,
  NavLinkStyled,
  ContactLink,
} from "./SecondHeader.styled";

export default function SecondHeader() {
  const changeLang = (event) => {
    console.log(event.target.name);
  };

  return (
    <AppBar>
      <Wrap>
        <ContactLink href="#" aria-label="facebook">
          <BsFacebook />
        </ContactLink>
        <ContactLink href="#" aria-label="telegram">
          <FaTelegramPlane />
        </ContactLink>
        <ContactLink href="#" aria-label="instagram">
          <GrInstagram />
        </ContactLink>
        <ContactLink href="#">
          <FaPhoneSquareAlt />
        </ContactLink>
      </Wrap>

      <WrapLang>
        <NavLinkStyled to="/events">Допомогти проекту</NavLinkStyled>
        <ToogleButton buttons={["УКР", "ENG", "РУС"]} onClick={changeLang} />
      </WrapLang>
    </AppBar>
  );
}
