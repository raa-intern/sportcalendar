import styled from "@emotion/styled/macro";
import { NavLink } from "react-router-dom";

export const AppBar = styled.div`
  display: none;

  @media screen and (min-width: 768px) {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding-top: 10px;
    padding-bottom: 10px;
  }
`;

export const Wrap = styled.div`
  @media screen and (min-width: 768px) {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 90px;
  }

  @media screen and (min-width: 1280px) {
    width: 110px;
  }
`;

export const ContactLink = styled.a`
  @media screen and (min-width: 768px) {
    font-size: 16px;
    color: var(--base-color);
    &:hover,
    &:focus {
      color: var(--accent-color);
      transform: scale(1.2);
    }
  }

  @media screen and (min-width: 1280px) {
    font-size: 20px;
  }
`;

export const WrapLang = styled.div`
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;

  @media screen and (min-width: 768px) {
    width: 250px;
  }

  @media screen and (min-width: 1280px) {
    width: 320px;
  }
`;

export const NavLinkStyled = styled(NavLink)`
  @media screen and (min-width: 768px) {
    font-size: 10px;
    font-weight: 400;
    text-transform: uppercase;
    color: var(--base-color);
    &:hover,
    &:focus {
      color: var(--accent-color);
    }
  }

  @media screen and (min-width: 1280px) {
    font-size: 14px;
    font-weight: 400;
  }
`;
