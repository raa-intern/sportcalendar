import styled from "@emotion/styled/macro";
import { NavLink } from "react-router-dom";

export const MainНeader = styled.header`
  top: 0;
  left: 0;
  position: sticky;
  z-index: 700;
  box-shadow: var(--main-shadow);
  background-color: var(--main-color);
  margin-bottom: 15px;
  @media screen and (min-width: 425px) {
    margin-bottom: 25px;
  }
`;

export const NavListMobile = styled.div`
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-top: 15px;
  padding-bottom: 15px;

  @media screen and (min-width: 768px) {
    display: none;
  }
`;

export const NavList = styled.div`
  display: none;

  @media screen and (min-width: 768px) {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 5px;
    padding-bottom: 20px;
  }
`;

export const NavListItem = styled(NavLink)`
  color: var(--white-color);
  &:not(:last-child) {
    margin-right: 15px;
  }
  &:focus,
  &:hover {
    color: var(--accent-color);
  }

  @media screen and (min-width: 768px) {
    font-size: 15px;
  }

  @media screen and (min-width: 1280px) {
    font-size: 16px;
  }
`;

export const LogoLink = styled.a`
  font-weight: 900;
  text-transform: uppercase;
  color: var(--accent-color);
  cursor: pointer;

  @media screen and (min-width: 768px) {
    font-size: 17px;
  }

  @media screen and (min-width: 1280px) {
    font-size: 24px;
  }
`;

export const Button = styled.button`
  background-color: transparent;
  letter-spacing: 0.5px;
  color: var(--white-color);
  border: 1px var(--white-color);
  border-radius: 5px;
  cursor: pointer;
  &:hover,
  &:focus {
    color: var(--accent-color);
  }

  @media screen and (min-width: 768px) {
    font-size: 15px;
  }

  @media screen and (min-width: 1280px) {
    font-size: 15px;
  }
`;
