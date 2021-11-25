import styled from "@emotion/styled/macro";

export const CardContainer = styled.div`
  @media screen and (min-width: 768px) {
    display: flex;
  }
`;

export const CardContent = styled.div`
  padding: 12px;
  @media screen and (min-width: 768px) {
    width: 305px;
    padding: 15px;
  }
  @media screen and (min-width: 1280px) {
    width: 605px;
  }
`;

export const Image = styled.img`
  width: 100%;
  height: 100%;
  @media screen and (min-width: 768px) {
    width: 270px;
  }
  @media screen and (min-width: 1280px) {
    width: 370px;
  }
`;

export const Title = styled.h1`
  font-size: 16px;
  font-weight: 700;
  color: var(--black-color);
  margin-bottom: 10px;
  @media screen and (min-width: 768px) {
    font-size: 14px;
  }
  @media screen and (min-width: 1280px) {
    font-size: 16px;
  }
`;

export const Discr = styled.p`
  display: flex;
  align-items: center;
  font-size: 14px;
  margin-bottom: 10px;
  @media screen and (min-width: 768px) {
    font-size: 12px;
  }
  @media screen and (min-width: 1280px) {
    font-size: 14px;
  }
`;

export const P = styled.p`
  display: flex;
  align-items: center;
  margin-bottom: 10px;
  & > svg {
    color: var(--accent-color);
    margin-right: 10px;
  }

  @media screen and (min-width: 768px) {
    font-size: 14px;
  }
`;

export const ButtonWrap = styled.div`
  display: flex;
  align-items: center;
  justify-content: space-around;

  @media screen and (min-width: 768px) {
    flex-direction: column;
    justify-content: center;
    margin-top: 15px;
    margin-right: 15px;
  }
`;

export const Button = styled.button`
  display: flex;
  align-items: flex-start;
  // justify-content: center;
  border: none;
  color: var(--black-color);
  background-color: transparent;
  margin-bottom: 15px;

  &:focus,
  &:hover {
    color: var(--accent-color);
  }

  & > svg {
    margin-right: 15px;
  }
`;
