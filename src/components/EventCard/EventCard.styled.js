import styled from "@emotion/styled/macro";

export const Title = styled.h1`
  font-size: 16px;
  font-weight: 700;
  color: var(--black-color);
  margin-bottom: 10px;
`;

export const Discr = styled.p`
  display: flex;
  align-items: center;
  font-size: 14px;
  margin-bottom: 10px;
`;

export const IconWrap = styled.div`
  display: flex;
  align-items: center;
  justify-content: space-between;
  & > svg {
    color: var(--accent-color);
    margin-right: 10px;
  }
`;

export const Wrap = styled.div`
  display: flex;
  flex-direction: column;
  align-items: flex-start;

  margin-top: 15px;
  margin-right: 15px;
`;

export const Button = styled.button`
  display: flex;
  align-items: center;
  justify-content: center;
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
